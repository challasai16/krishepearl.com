<!--head-->
<?php
include 'head.php';
?>
<body>

 <!--header-->
<?php
include 'header.php';
?>

<div class="container-fluid bg-light connectivity">
</div>
<div class="container-fluid bg-light gallery" id="gallery" style="background-color:#d5f0f000;">
<div class="container" >
        </div>
    </div>
    <div class="container-fluid py-5 emi-background-image" id="emicalculater" style="margin:2rem 0;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3" style="color: #af740f !important;
    font-size: 19px;">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">EMI CALCULATOR</h1>
                    <div class="emi-result-content">
                        <p style="color:#06011d;font-weight: 600;">EMI Amount : <span class="emi-amout">00</span></p>
                        <p style="color:#06011d;font-weight: 600;">Total Interest : <span class="interest">00</span></p>
                        <p style="color:#06011d;font-weight: 600;">Total Payable : <span class="total-payable">00</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0" style="margin-top: 20px">
                    <section class="calculators-main">
                        <div class="calculator-container s-container s-flex">
                            <!-- emi calculator start here  -->
                            <div class="emi-calculator calculator-box">
                                <div class="calculator-title">
                                    <h2>EMI CALCULATOR</h2>
                                </div>
                                <div class="entrybox">
                                    <input type="number" class="loan-amount" placeholder="Loan Amount" required>
                                    <input type="number" class="loan-interest" placeholder="Rate Of Interest" required>
                                    <input type="number" class="loan-tenure" placeholder="Loan Tenure In Years"
                                        required>
                                    <button id="calculateBtn" class="emi-cal-btn">CALCULATE</button>
                                </div>
                            </div>
                            <!-- emi calculator end here  -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5" style="display: none;" id="calculations">
        <h2>Monthly EMI Payment</h2>
        <table id="emiTable" class="table">
            <thead>
                <tr>
                    <th style="color:#06011d">Month</th>
                    <th style="color:#06011d">Principal (Rs.)</th>
                    <th style="color:#06011d">Interest (Rs.)</th>
                    <th style="color:#06011d">Principal + Interest (Rs.)</th>
                    <th style="color:#06011d">Balance to be Paid (Rs.)</th>
                </tr>
            </thead>
            <tbody id="emiTableBody">

            </tbody>

        </table>
        <button id="downloadPdfBtn" class="dwonloadpdf">Download PDF</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        let loanAmountInput = document.querySelector(".loan-amount");
        let interestRateInput = document.querySelector(".loan-interest");
        let tenureInput = document.querySelector(".loan-tenure");
        let emiBtn = document.querySelector('.emi-cal-btn');

        let emiTableBody = document.getElementById('emiTableBody');
        let totalPrincipal = 0;
        let totalInterest = 0;

        emiBtn.addEventListener("click", () => {
            let loanAmount = parseFloat(loanAmountInput.value);
            let interestRate = parseFloat(interestRateInput.value);
            let tenureYears = parseInt(tenureInput.value); // Loan tenure in years
            let monthlyInterestRate = (interestRate / 100) / 12;
            let totalMonths = tenureYears * 12; // Total number of months

            // Calculate EMI using the formula
            let emi = (loanAmount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -totalMonths));

            emiTableBody.innerHTML = '';
            let remainingBalance = loanAmount;
            for (let i = 1; i <= totalMonths; i++) {
                let interest = remainingBalance * monthlyInterestRate;
                let principal = emi - interest;
                totalPrincipal += principal;
                totalInterest += interest;
                let balance = remainingBalance - principal;
                remainingBalance = balance;

                let row = document.createElement('tr');
                row.innerHTML = `
                <td style="color: #06011d;">${i}</td>
                <td style="color: #06011d;">${principal.toFixed(2)}</td>
                <td style="color: #06011d;">${interest.toFixed(2)}</td>
                <td style="color: #06011d;">${emi.toFixed(2)}</td>
                <td style="color: #06011d;">${balance.toFixed(2)}</td>
            `;
                emiTableBody.appendChild(row);
            }
            let lastRow = document.createElement('tr');
            // lastRow.innerHTML = `
            //     <td>Total</td>
            //     <td>${totalPrincipal.toFixed(2)}</td>
            //     <td>${totalInterest.toFixed(2)}</td>
            //     <td>${(totalPrincipal + totalInterest).toFixed(2)}</td>
            //     <td>0.00</td>
            // `;
            emiTableBody.appendChild(lastRow);

            // Update EMI amount, total interest, and total payable in the result section
            let emiAmountSpan = document.querySelector('.emi-amout');
            let totalInterestSpan = document.querySelector('.interest');
            let totalPayableSpan = document.querySelector('.total-payable');
            emiAmountSpan.textContent = emi.toFixed(2);
            totalInterestSpan.textContent = totalInterest.toFixed(2);
            totalPayableSpan.textContent = (totalPrincipal + totalInterest).toFixed(2);
        });

        document.getElementById('downloadPdfBtn').addEventListener('click', () => {
            const element = document.getElementById('emiTable');
            const filename = 'emi_calculation.pdf';
            html2pdf().from(element).save(filename);
        });
    </script>
    </div>
    </div>

    <!-- Footer Start -->
    <?php

    include 'footer.php';
    ?>
    <!-- Footer End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js"
        integrity="sha512-iSVaq9Huv1kxBDAOH7Il1rwIJD+uspMQC1r4Y73QquhbI2ia+PIXUoS5rBjWjYyD03S8t7gZmON+Dk6yPlWHXw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGG3634J" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="sliders.js"></script>
    <!--Fancy Box-->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.min.js"></script>

    <script>
        Fancybox.bind('[data-fancybox="master"]', {
            hideScrollbar: false,
        });

        // calculation table  
        document.getElementById("calculateBtn").addEventListener("click", function () {
            document.getElementById("calculations").style.display = "block";
        });
    </script>
</body>
</html>