// atswa paper prices
let atswaIPrices = {
    atswaIPricesOnePaper: '₦14500',
    atswaIPricesTwoPapers: '₦18500',
    atswaIPricesThreePapers: '₦22500',
    atswaIPricesFourPapers: '₦27000'
}

let atswaIIPrices = {
    atswaIIPricesOnePaper: '₦17000',
    atswaIIPricesTwoPapers: '₦19500',
    atswaIIPricesThreePapers: '₦24500',
    atswaIIPricesFourPapers: '₦32500'
}

let atswaIIIPrices = {
    atswaIIIPricesOnePaper: '₦18500',
    atswaIIIPricesTwoPapers: '₦23500',
    atswaIIIPricesThreePapers: '₦28500',
    atswaIIIPricesFourPapers: '₦35500'
}


$(document).ready(function () {

    // get atswa i number of papers
    let atswaICount = 0;
    $('#atswa-i-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            atswaICount++;
            $('#atswa-i-papers').html(atswaICount);
        }
        if ($(this).prop('checked') != 1) {
            atswaICount--;
            $('#atswa-i-papers').html(atswaICount);
        }
        getAtswaTotalPapers();
        getAtswaITotalAmount(atswaICount);
        displayAtswaTotalPrice();
        return atswaICount;
    })


    // get atswa ii number of papers
    let atswaIICount = 0;
    $('#atswa-ii-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            atswaIICount++;
            $('#atswa-ii-papers').html(atswaIICount);
        }
        if ($(this).prop('checked') != 1) {
            atswaIICount--;
            $('#atswa-ii-papers').html(atswaIICount);
        }
        getAtswaTotalPapers();
        getAtswaIITotalAmount(atswaIICount);
        displayAtswaTotalPrice();
        return atswaIICount;
    })


    // get atswa iii number of papers
    let atswaIIICount = 0;
    $('#atswa-iii-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            atswaIIICount++;
            $('#atswa-iii-papers').html(atswaIIICount);
        }
        if ($(this).prop('checked') != 1) {
            atswaIIICount--;
            $('#atswa-iii-papers').html(atswaIIICount);
        }
        getAtswaTotalPapers();
        getAtswaIIITotalAmount(atswaIIICount);
        displayAtswaTotalPrice();
        return atswaIIICount;
    })

    // get atswa total number of papers
    let atswaTotalPapers = $('#atswa-total-papers');
    function getAtswaTotalPapers() {
        let atswaI = parseInt($('#atswa-i-papers').text());
        let atswaII = parseInt($('#atswa-ii-papers').text());
        let atswaIII = parseInt($('#atswa-iii-papers').text());
        atswaTotalPapers.text(atswaI + atswaII + atswaIII);
    }


    /****************************************************************************/
    // get amount of atswaI papers
    let atswaITotalAmount = 0;
    function getAtswaITotalAmount(totalNumberOfAtswaIPapers) {
        let { atswaIPricesOnePaper, atswaIPricesTwoPapers, atswaIPricesThreePapers, atswaIPricesFourPapers } = atswaIPrices;
        switch (totalNumberOfAtswaIPapers) {
            case 1:
                atswaITotalAmount = atswaIPricesOnePaper;
                console.log(`the amount for one atswaI paper is ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            case 2:
                atswaITotalAmount = atswaIPricesTwoPapers;
                console.log(`the amount for two atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            case 3:
                atswaITotalAmount = atswaIPricesThreePapers;
                console.log(`the amount for three atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            case 4:
                atswaITotalAmount = atswaIPricesFourPapers;
                console.log(`the amount for four atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(`${atswaITotalAmount}`.slice(1));
                // return atswaITotalAmount;
                break;
            default:
                atswaITotalAmount = 0;
                console.log(`no course selected hence amount for atswaI papers are ${atswaITotalAmount}`);
                $('#atswa-i-amount').html(0);
                // return atswaITotalAmount;
                break;
        }
        // return atswaITotalAmount;
    }


    /****************************************************************************/
    // get amount of atswaII papers
    let atswaIITotalAmount = 0;
    function getAtswaIITotalAmount(totalNumberOfAtswaIIPapers) {
        let { atswaIIPricesOnePaper, atswaIIPricesTwoPapers, atswaIIPricesThreePapers, atswaIIPricesFourPapers } = atswaIIPrices;
        switch (totalNumberOfAtswaIIPapers) {
            case 1:
                atswaIITotalAmount = atswaIIPricesOnePaper;
                console.log(`the amount for one atswaII paper is ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            case 2:
                atswaIITotalAmount = atswaIIPricesTwoPapers;
                console.log(`the amount for two atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            case 3:
                atswaIITotalAmount = atswaIIPricesThreePapers;
                console.log(`the amount for three atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            case 4:
                atswaIITotalAmount = atswaIIPricesFourPapers;
                console.log(`the amount for four atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(`${atswaIITotalAmount}`.slice(1));
                // return atswaIITotalAmount;
                break;
            default:
                atswaIITotalAmount = 0;
                console.log(`no course selected hence amount for atswaII papers are ${atswaIITotalAmount}`);
                $('#atswa-ii-amount').html(0);
                // return atswaIITotalAmount;
                break;
        }
        // return atswaITotalAmount;
    }


    /****************************************************************************/
    // get amount of atswaIII papers
    let atswaIIITotalAmount = 0;
    function getAtswaIIITotalAmount(totalNumberOfAtswaIIIPapers) {
        let { atswaIIIPricesOnePaper, atswaIIIPricesTwoPapers, atswaIIIPricesThreePapers, atswaIIIPricesFourPapers } = atswaIIIPrices;
        switch (totalNumberOfAtswaIIIPapers) {
            case 1:
                atswaIIITotalAmount = atswaIIIPricesOnePaper;
                console.log(`the amount for one atswaIII paper is ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            case 2:
                atswaIIITotalAmount = atswaIIIPricesTwoPapers;
                console.log(`the amount for two atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            case 3:
                atswaIIITotalAmount = atswaIIIPricesThreePapers;
                console.log(`the amount for three atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            case 4:
                atswaIIITotalAmount = atswaIIIPricesFourPapers;
                console.log(`the amount for four atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(`${atswaIIITotalAmount}`.slice(1));
                // return atswaIIITotalAmount;
                break;
            default:
                atswaIIITotalAmount = 0;
                console.log(`no course selected hence amount for atswaIII papers are ${atswaIIITotalAmount}`);
                $('#atswa-iii-amount').html(0);
                // return atswaIIITotalAmount;
                break;
        }
        return atswaITotalAmount;
    }


    // get atswa total amount
    let atswaTotalAmount = $('#atswa-total-amount');
    function displayAtswaTotalPrice() {
        let finalAtswaIPrice = parseInt($('#atswa-i-amount').text());
        let finalAtswaIIPrice = parseInt($('#atswa-ii-amount').text());
        let finalAtswaIIIPrice = parseInt($('#atswa-iii-amount').text());
        atswaTotalAmount.text(finalAtswaIPrice + finalAtswaIIPrice + finalAtswaIIIPrice);
        console.log(finalAtswaIPrice + finalAtswaIIPrice + finalAtswaIIIPrice);
    }

})