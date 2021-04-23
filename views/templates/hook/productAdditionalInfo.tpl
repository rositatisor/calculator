<main>
    <div class="calculator-container">
        <header>
            <a class="inbank-logo" href="https://www.inbank.lv/">
                <img src="https://www.inbank.lv/images/logo/inbank-logo__purple.svg" alt="Bank logo">
            </a>
            <a class="inbank-link" href="https://www.inbank.lv/">www.inbank.lv</a>
        </header>
        <div class="calculator-content">
            <div class="info-sidebar">
                <h3>Amount:</h3>
                <h3>Period:</h3>
                <h3>Downpayment:</h3>
            </div>
            <div class="slider-main">
                <div class="slider-container">
                    <div class="slider-min-label">{$CALCULATOR_B}€</div>
                    <input class="amount-slider" type="range" min="{$CALCULATOR_B}" max="{$CALCULATOR_C}">
                    <div class="slider-max-label">{$CALCULATOR_C}€</div>
                </div>
                <div class="slider-container">
                    <div class="slider-min-label">{$CALCULATOR_E}</div>
                    <input class="period-slider" type="range" min="{$CALCULATOR_E}" max="{$CALCULATOR_F}" step="3">
                    <div class="slider-max-label period">{$CALCULATOR_F}</div>
                </div>
                <div class="slider-container">
                    <div class="slider-min-label">{$CALCULATOR_K}%</div>
                    <input class="downpayment-slider" type="range" min="{$CALCULATOR_K}" max="{$CALCULATOR_J}"
                        step="{$CALCULATOR_L}">
                    <div class="slider-max-label">{$CALCULATOR_J}%</div>
                </div>
            </div>
            <div class="data-sidebar">
                <label class="subtitle" for="amount">Amount:</label>
                <input type="number" name="amount" id="amount">
                <label class="subtitle" for="period">Period:</label>
                <select name="period" id="period">
                    <option value="3">3 months</option>
                    <option value="6">6 months</option>
                    <option value="9">9 months</option>
                    <option value="12">12 months</option>
                    <option value="15">15 months</option>
                    <option value="18">18 months</option>
                    <option value="21">21 months</option>
                    <option value="24">24 months</option>
                    <option value="27">27 months</option>
                    <option value="30">30 months</option>
                    <option value="33">33 months</option>
                    <option value="36">36 months</option>
                    <option value="39">39 months</option>
                    <option value="42">42 months</option>
                    <option value="45">45 months</option>
                    <option value="48">48 months</option>
                </select>
                <label class="subtitle" for="downpayment">Downpayment:</label>
                <select name="downpayment" id="downpayment">
                    <option class="opt" value="10">10%</option>
                    <option class="opt" value="15">15%</option>
                    <option class="opt" value="20">20%</option>
                    <option class="opt" value="25">25%</option>
                    <option class="opt" value="30">30%</option>
                    <option class="opt" value="35">35%</option>
                    <option class="opt" value="40">40%</option>
                    <option class="opt" value="45">45%</option>
                    <option class="opt" value="50">50%</option>
                    <option class="opt" value="55">55%</option>
                    <option class="opt" value="60">60%</option>
                    <option class="opt" value="65">65%</option>
                    <option class="opt" value="70">70%</option>
                    <option class="opt" value="75">75%</option>
                    <option class="opt" value="80">80%</option>
                    <option class="opt" value="85">85%</option>
                    <option class="opt" value="90">90%</option>
                </select>
            </div>
        </div>
        <footer>
            <h2>Loan amount <span id="sum"></span>€</h2>
            <h1>Monthly payment <strong><span id="payment"></span>€</strong></h1>
            <p class="disclaimer" id="disclaimer">
                Representative&nbsp;sample: amount of loan - EUR
                <span id="disc-loan-amount">{$CALCULATOR_T_AMOUNT}</span>
                , period of loan -
                <span id="disc-loan-period">{$CALCULATOR_T_PERIOD}</span>
                months, interest rate -
                <span id="disc-interest">{$CALCULATOR_T_INTEREST}</span>
                %, commission for issue of the credit - EUR
                <span id="disc-commision-fee">{$CALCULATOR_T_COMMISION}</span>
                , admin fee
                <span id="disc-admin-fee">{$CALCULATOR_T_ADMINFEE}</span>
                , total amount to be repaid - EUR
                <span id="disc-total-payment">{$CALCULATOR_T_TOTAL}</span>
                , annual percentage rate (APR) -
                <span id="disc-apr">{$CALCULATOR_T_APR}</span>
                %.
            </p>
        </footer>
    </div>
</main>