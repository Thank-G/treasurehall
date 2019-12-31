// citn paper prices
let citnFoundationPrices = {
    regular: {
        newStudentsOnePaper: '₦10000',
        newStudentsTwoPapers: '₦20000',
        newStudentsThreePapers: '₦30000',
        newStudentsFourPapers: '₦40000'
    },
    firstTenPromo: {
        firstTenPromoOnePaper: '₦9500',
        firstTenPromoTwoPapers: '₦19000',
        firstTenPromoThreePapers: '₦28500',
        firstTenPromoFourPapers: '₦38000'
    }
}

let citnProfTaxIPrices = {
    regular: {
        newStudentsOnePaper: '₦11000',
        newStudentsTwoPapers: '₦22000',
        newStudentsThreePapers: '₦33000',
        newStudentsFourPapers: '₦44000'
    },
    firstTenPromo: {
        firstTenPromoOnePaper: '₦10450',
        firstTenPromoTwoPapers: '₦20900',
        firstTenPromoThreePapers: '₦31350',
        firstTenPromoFourPapers: '₦41800'
    }
}

let citnProfTaxIIPrices = {
    regular: {
        newStudentsOnePaper: '₦12000',
        newStudentsTwoPapers: '₦24000',
        newStudentsThreePapers: '₦36000',
        newStudentsFourPapers: '₦48000',
        newStudentsFivePapers: '₦60000'
    },
    firstTenPromo: {
        firstTenPromoOnePaper: '₦11400',
        firstTenPromoTwoPapers: '₦22800',
        firstTenPromoThreePapers: '₦34200',
        firstTenPromoFourPapers: '₦45600',
        firstTenPromoFivePapers: '₦57000'
    }
}



$(document).ready(function () {

    // get foundation number of papers for CITN
    let citnFoundationCount = 0;
    $('#citn-foundation-courses-selected > div > input:checkbox').click(function () {
        console.log()
        if ($(this).prop('checked') == 1) {
            citnFoundationCount++;
            $('#citn-foundation-papers').html(citnFoundationCount);
        }
        if ($(this).prop('checked') != 1) {
            citnFoundationCount--;
            $('#citn-foundation-papers').html(citnFoundationCount);
        }
        getCitnTotalPapers();
        getCitnFoundationTotalAmount(citnFoundationCount);
        displayCitnTotalPrice();
    })

    // get prof tax I number of papers
    let citnProfTaxICount = 0;
    $('#citn-prof-tax-i-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            citnProfTaxICount++;
            $('#citn-prof-tax-i-papers').html(citnProfTaxICount);
        }
        if ($(this).prop('checked') != 1) {
            citnProfTaxICount--;
            $('#citn-prof-tax-i-papers').html(citnProfTaxICount);
        }
        getCitnTotalPapers();
        getCitnProfTaxITotalAmount(citnProfTaxICount);
        displayCitnTotalPrice();
    })

    // get prof tax II number of papers
    let citnProfTaxIICount = 0;
    $('#citn-prof-tax-ii-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            citnProfTaxIICount++;
            $('#citn-prof-tax-ii-papers').html(citnProfTaxIICount);
        }
        if ($(this).prop('checked') != 1) {
            citnProfTaxIICount--;
            $('#citn-prof-tax-ii-papers').html(citnProfTaxIICount);
        }
        getCitnTotalPapers();
        getCitnProfTaxIITotalAmount(citnProfTaxIICount);
        displayCitnTotalPrice();
    })


    // get citn total number of papers
    let citnTotalPapers = $('#citn-total-papers');
    function getCitnTotalPapers() {
        let citnFoundation = parseInt($('#citn-foundation-papers').text());
        let citnProfTaxI = parseInt($('#citn-prof-tax-i-papers').text());
        let citnProfTaxII = parseInt($('#citn-prof-tax-ii-papers').text());
        citnTotalPapers.text(citnFoundation + citnProfTaxI + citnProfTaxII);
    }


    // get amount of citnFoundation papers
    let citnFoundationTotalAmount = 0;
    function getCitnFoundationTotalAmount(totalNumberOfCitnFoundationPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnFoundationPrices.regular;
        switch (totalNumberOfCitnFoundationPapers) {
            case 1:
                citnFoundationTotalAmount = newStudentsOnePaper;
                console.log(`the amount for one citnFoundation paper is ${citnFoundationTotalAmount}`);
                $('#citn-foundation-amount').html(`${citnFoundationTotalAmount}`.slice(1));
                // return citnFoundationTotalAmount;
                break;
            case 2:
                citnFoundationTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two citnFoundation papers are ${citnFoundationTotalAmount}`);
                $('#citn-foundation-amount').html(`${citnFoundationTotalAmount}`.slice(1));
                // return citnFoundationTotalAmount;
                break;
            case 3:
                citnFoundationTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three citnFoundation papers are ${citnFoundationTotalAmount}`);
                $('#citn-foundation-amount').html(`${citnFoundationTotalAmount}`.slice(1));
                // return citnFoundationTotalAmount;
                break;
            case 4:
                citnFoundationTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four atswaI papers are ${citnFoundationTotalAmount}`);
                $('#citn-foundation-amount').html(`${citnFoundationTotalAmount}`.slice(1));
                // return citnFoundationTotalAmount;
                break;
            default:
                citnFoundationTotalAmount = 0;
                console.log(`no course selected hence amount for atswaI papers are ${citnFoundationTotalAmount}`);
                $('#citn-foundation-amount').html(0);
                // return citnFoundationTotalAmount;
                break;
        }
        // return citnFoundationTotalAmount;
    }


    /****************************************************************************/
    // get amount of citnProfTaxITotalAmount papers
    let citnProfTaxITotalAmount = 0;
    function getCitnProfTaxITotalAmount(totalNumberOfProfTaxIPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnProfTaxIPrices.regular;
        switch (totalNumberOfProfTaxIPapers) {
            case 1:
                citnProfTaxITotalAmount = newStudentsOnePaper;
                console.log(`the amount for one citnProfTaxITotalAmount paper is ${citnProfTaxITotalAmount}`);
                $('#citn-prof-tax-i-amount').html(`${citnProfTaxITotalAmount}`.slice(1));
                // return citnProfTaxITotalAmount;
                break;
            case 2:
                citnProfTaxITotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                $('#citn-prof-tax-i-amount').html(`${citnProfTaxITotalAmount}`.slice(1));
                // return citnProfTaxITotalAmount;
                break;
            case 3:
                citnProfTaxITotalAmount = newStudentsThreePapers;
                console.log(`the amount for three citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                $('#citn-prof-tax-i-amount').html(`${citnProfTaxITotalAmount}`.slice(1));
                // return citnProfTaxITotalAmount;
                break;
            case 4:
                citnProfTaxITotalAmount = newStudentsFourPapers;
                console.log(`the amount for four citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                $('#citn-prof-tax-i-amount').html(`${citnProfTaxITotalAmount}`.slice(1));
                // return citnProfTaxITotalAmount;
                break;
            default:
                citnProfTaxITotalAmount = 0;
                console.log(`no course selected hence amount for citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                $('#citn-prof-tax-i-amount').html(0);
                // return citnProfTaxITotalAmount;
                break;
        }
        // return citnProfTaxITotalAmount;
    }


    /****************************************************************************/
    // get amount of citnProfTaxIITotalAmount papers
    let citnProfTaxIITotalAmount = 0;
    function getCitnProfTaxIITotalAmount(totalNumberOfProfTaxIIPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnProfTaxIIPrices.regular;
        switch (totalNumberOfProfTaxIIPapers) {
            case 1:
                citnProfTaxIITotalAmount = newStudentsOnePaper;
                console.log(`the amount for one citnProfTaxIITotalAmount paper is ${citnProfTaxIITotalAmount}`);
                $('#citn-prof-tax-ii-amount').html(`${citnProfTaxIITotalAmount}`.slice(1));
                // return citnProfTaxIITotalAmount;
                break;
            case 2:
                citnProfTaxIITotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                $('#citn-prof-tax-ii-amount').html(`${citnProfTaxIITotalAmount}`.slice(1));
                // return citnProfTaxIITotalAmount;
                break;
            case 3:
                citnProfTaxIITotalAmount = newStudentsThreePapers;
                console.log(`the amount for three citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                $('#citn-prof-tax-ii-amount').html(`${citnProfTaxIITotalAmount}`.slice(1));
                // return citnProfTaxIITotalAmount;
                break;
            case 4:
                citnProfTaxIITotalAmount = newStudentsFourPapers;
                console.log(`the amount for four citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                $('#citn-prof-tax-ii-amount').html(`${citnProfTaxIITotalAmount}`.slice(1));
                // return citnProfTaxIITotalAmount;
                break;
            default:
                citnProfTaxIITotalAmount = 0;
                console.log(`no course selected hence amount for citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                $('#citn-prof-tax-ii-amount').html(0);
                // return citnProfTaxIITotalAmount;
                break;
        }
        // return citnProfTaxIITotalAmount;
    }


    // get citn total amount
    let citnTotalAmount = $('#citn-total-amount');
    function displayCitnTotalPrice() {
        let finalCitnFoundationPrice = parseInt($('#citn-foundation-amount').text());
        let finalCitnProfTaxIPrice = parseInt($('#citn-prof-tax-i-amount').text());
        let finalCitnProfTaxIIPrice = parseInt($('#citn-prof-tax-ii-amount').text());
        // let finalCitnProfTaxIIIPrice = parseInt($('#citn-prof-tax-ii-iamount').text());
        citnTotalAmount.text(finalCitnFoundationPrice + finalCitnProfTaxIPrice + finalCitnProfTaxIIPrice);
        console.log(finalCitnFoundationPrice + finalCitnProfTaxIPrice + finalCitnProfTaxIIPrice);
    }
})
