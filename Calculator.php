<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Calculator extends Module
{
    public function __construct()
    {
        $this->name = 'calculator';
        $this->tab = 'font_office_features';
        $this->version = '1.0';
        $this->author = 'Rosita';
        $this->ps_versions_compliancy = [
            'min' => '1.5', 
            'max' => _PS_VERSION_
        ];
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Calculator Demo');
        $this->description = $this->l('Just a demo');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('CALCULATOR_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitUpdate'))
        {
            Configuration::updateValue('CALCULATOR_A', Tools::getValue('a'));
            Configuration::updateValue('CALCULATOR_B', Tools::getValue('b'));
            Configuration::updateValue('CALCULATOR_C', Tools::getValue('c'));
            Configuration::updateValue('CALCULATOR_D', Tools::getValue('d'));
            Configuration::updateValue('CALCULATOR_E', Tools::getValue('e'));
            Configuration::updateValue('CALCULATOR_F', Tools::getValue('f'));
            Configuration::updateValue('CALCULATOR_G', Tools::getValue('g'));
            Configuration::updateValue('CALCULATOR_H', Tools::getValue('h'));
            Configuration::updateValue('CALCULATOR_I', Tools::getValue('i'));
            Configuration::updateValue('CALCULATOR_J', Tools::getValue('j'));
            Configuration::updateValue('CALCULATOR_K', Tools::getValue('k'));
            Configuration::updateValue('CALCULATOR_L', Tools::getValue('l'));
            Configuration::updateValue('CALCULATOR_M', Tools::getValue('m'));
            Configuration::updateValue('CALCULATOR_N', Tools::getValue('n'));
            Configuration::updateValue('CALCULATOR_O', Tools::getValue('o'));
            Configuration::updateValue('CALCULATOR_P', Tools::getValue('p'));
            Configuration::updateValue('CALCULATOR_Q', Tools::getValue('q'));
            Configuration::updateValue('CALCULATOR_R', Tools::getValue('r'));
            Configuration::updateValue('CALCULATOR_S', Tools::getValue('s'));
            Configuration::updateValue('CALCULATOR_T', Tools::getValue('t'));
            Configuration::updateValue('CALCULATOR_T_AMOUNT', Tools::getValue('t-amount'));
            Configuration::updateValue('CALCULATOR_T_PERIOD', Tools::getValue('t-period'));
            Configuration::updateValue('CALCULATOR_T_INTEREST', Tools::getValue('t-interest'));
            Configuration::updateValue('CALCULATOR_T_COMMISION', Tools::getValue('t-commision'));
            Configuration::updateValue('CALCULATOR_T_ADMINFEE', Tools::getValue('t-adminfee'));
            Configuration::updateValue('CALCULATOR_T_TOTAL', Tools::getValue('t-total'));
            Configuration::updateValue('CALCULATOR_T_APR', Tools::getValue('t-apr'));
        }
        $this->context->smarty->assign([
            'CALCULATOR_A' => Configuration::get('CALCULATOR_A'),
            'CALCULATOR_B' => Configuration::get('CALCULATOR_B'),
            'CALCULATOR_C' => Configuration::get('CALCULATOR_C'),
            'CALCULATOR_D' => Configuration::get('CALCULATOR_D'),
            'CALCULATOR_E' => Configuration::get('CALCULATOR_E'),
            'CALCULATOR_F' => Configuration::get('CALCULATOR_F'),
            'CALCULATOR_G' => Configuration::get('CALCULATOR_G'),
            'CALCULATOR_H' => Configuration::get('CALCULATOR_H'),
            'CALCULATOR_I' => Configuration::get('CALCULATOR_I'),
            'CALCULATOR_J' => Configuration::get('CALCULATOR_J'),
            'CALCULATOR_K' => Configuration::get('CALCULATOR_K'),
            'CALCULATOR_L' => Configuration::get('CALCULATOR_L'),
            'CALCULATOR_M' => Configuration::get('CALCULATOR_M'),
            'CALCULATOR_N' => Configuration::get('CALCULATOR_N'),
            'CALCULATOR_O' => Configuration::get('CALCULATOR_O'),
            'CALCULATOR_P' => Configuration::get('CALCULATOR_P'),
            'CALCULATOR_Q' => Configuration::get('CALCULATOR_Q'),
            'CALCULATOR_R' => Configuration::get('CALCULATOR_R'),
            'CALCULATOR_S' => Configuration::get('CALCULATOR_S'),
            'CALCULATOR_T' => Configuration::get('CALCULATOR_T'),
            'CALCULATOR_T_AMOUNT' => Configuration::get('CALCULATOR_T_AMOUNT'),
            'CALCULATOR_T_PERIOD' => Configuration::get('CALCULATOR_T_PERIOD'),
            'CALCULATOR_T_INTEREST' => Configuration::get('CALCULATOR_T_INTEREST'),
            'CALCULATOR_T_COMMISION' => Configuration::get('CALCULATOR_T_COMMISION'),
            'CALCULATOR_T_ADMINFEE' => Configuration::get('CALCULATOR_T_ADMINFEE'),
            'CALCULATOR_T_TOTAL' => Configuration::get('CALCULATOR_T_TOTAL'),
            'CALCULATOR_T_APR' => Configuration::get('CALCULATOR_T_APR')
            ]);
            
        return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
    }

    public function install()
    {
        if (!parent::install() || 
            !$this->registerHook('displayProductAdditionalInfo') ||
            !$this->registerHook('actionFrontControllerSetMedia') ||
            !Configuration::updateValue('CALCULATOR_NAME', 'name')
        ) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('CALCULATOR_NAME')
        ) {
            return false;
        }
        return true;
    }

    public function hookDisplayProductAdditionalInfo($params)
    {
        $this->context->smarty->assign([
            'CALCULATOR_A' => Configuration::get('CALCULATOR_A'),
            'CALCULATOR_B' => Configuration::get('CALCULATOR_B'),
            'CALCULATOR_C' => Configuration::get('CALCULATOR_C'),
            'CALCULATOR_D' => Configuration::get('CALCULATOR_D'),
            'CALCULATOR_E' => Configuration::get('CALCULATOR_E'),
            'CALCULATOR_F' => Configuration::get('CALCULATOR_F'),
            'CALCULATOR_G' => Configuration::get('CALCULATOR_G'),
            'CALCULATOR_H' => Configuration::get('CALCULATOR_H'),
            'CALCULATOR_I' => Configuration::get('CALCULATOR_I'),
            'CALCULATOR_J' => Configuration::get('CALCULATOR_J'),
            'CALCULATOR_K' => Configuration::get('CALCULATOR_K'),
            'CALCULATOR_L' => Configuration::get('CALCULATOR_L'),
            'CALCULATOR_M' => Configuration::get('CALCULATOR_M'),
            'CALCULATOR_N' => Configuration::get('CALCULATOR_N'),
            'CALCULATOR_O' => Configuration::get('CALCULATOR_O'),
            'CALCULATOR_P' => Configuration::get('CALCULATOR_P'),
            'CALCULATOR_Q' => Configuration::get('CALCULATOR_Q'),
            'CALCULATOR_R' => Configuration::get('CALCULATOR_R'),
            'CALCULATOR_S' => Configuration::get('CALCULATOR_S'),
            'CALCULATOR_T' => Configuration::get('CALCULATOR_T'),
            'CALCULATOR_T_AMOUNT' => Configuration::get('CALCULATOR_T_AMOUNT'),
            'CALCULATOR_T_PERIOD' => Configuration::get('CALCULATOR_T_PERIOD'),
            'CALCULATOR_T_INTEREST' => Configuration::get('CALCULATOR_T_INTEREST'),
            'CALCULATOR_T_COMMISION' => Configuration::get('CALCULATOR_T_COMMISION'),
            'CALCULATOR_T_ADMINFEE' => Configuration::get('CALCULATOR_T_ADMINFEE'),
            'CALCULATOR_T_TOTAL' => Configuration::get('CALCULATOR_T_TOTAL'),
            'CALCULATOR_T_APR' => Configuration::get('CALCULATOR_T_APR')
        ]);

        return $this->display(__FILE__, 'views/templates/hook/productAdditionalInfo.tpl');
    }

    public function hookActionFrontControllerSetMedia($params)
    {
        $this->context->controller->registerStylesheet(
            'module-calculator-style',
            'modules/'.$this->name.'/views/css/calculator.css',
            [
              'media' => 'all',
              'priority' => 200,
            ]
        );

        $this->context->controller->registerJavascript(
            'module-calculator-simple-lib',
            'modules/'.$this->name.'/views/js/calculator.js',
            [
                'priority' => 200,
                'attribute' => 'async',
            ]
        );
    }
}