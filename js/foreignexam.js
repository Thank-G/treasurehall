// foreign exam paper prices
let foreignWeekdaysPrices = {
    regular: {
        ieltsWeekdaysPaper: '₦35000',
        toeflWeekdaysPaper: '₦70000',
        gmatWeekdaysPaper: '₦115000'
    }
}

let foreignWeekendsPrices = {
    regular: {
        ieltsWeekendsPaper: '₦40000',
        toeflWeekendsPaper: '₦80000',
        gmatWeekendsPaper: '₦1300000'        
    }
}



$(document).ready(function () {

    // get foreign weekdays number of papers
    let foreignWeekdaysCount = 0;
    $('#foreign-weekdays-courses-selected > div > input:checkbox').click(function () {
        console.log()
        if ($(this).prop('checked') == 1) {
            foreignWeekdaysCount++;
            $('#foreign-weekdays-papers').html(foreignWeekdaysCount);
        }
        if ($(this).prop('checked') != 1) {
            foreignWeekdaysCount--;
            $('#foreign-weekdays-papers').html(foreignWeekdaysCount);
        }
        getForeignCoursesTotalPapers();
        getForeignWeekdaysTotalAmount(foreignWeekdaysCount);
        displayForeignCoursesTotalPrice();
    })

    // get foreign weekends number of papers
    let foreignWeekendsCount = 0;
    $('#foreign-weekends-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            foreignWeekendsCount++;
            $('#foreign-weekends-papers').html(foreignWeekendsCount);
        }
        if ($(this).prop('checked') != 1) {
            foreignWeekendsCount--;
            $('#foreign-weekends-papers').html(foreignWeekendsCount);
        }
        getForeignCoursesTotalPapers();
        getForeignWeekendsTotalAmount(foreignWeekendsCount);
        displayForeignCoursesTotalPrice();
    })

    // get citn total number of papers
    let foreignCoursesTotalPapers = $('#foreign-total-papers');
    function getForeignCoursesTotalPapers() {
        let foreignWeekdays = parseInt($('#foreign-weekdays-papers').text());
        let foreignWeekends = parseInt($('#foreign-weekends-papers').text());
        foreignCoursesTotalPapers.text(foreignWeekdays + foreignWeekends);
    }


    

    /****************************************************************************/
    // get amount of foreign weekdays papers
    let foreignWeekdaysTotalAmount = 0;
    function getForeignWeekdaysTotalAmount(totalNumberOfforeignWeekdaysPapers) {
        let { ieltsWeekdaysPaper, toeflWeekdaysPaper, gmatWeekdaysPaper } = foreignWeekdaysPrices.regular;
        switch (totalNumberOfforeignWeekdaysPapers) {
            case 1:
                foreignWeekdaysTotalAmount = ieltsWeekdaysPaper;
                console.log(`the amount for ielts Weekdays paper is ${foreignWeekdaysTotalAmount}`);
                $('#foreign-weekdays-amount').html(`${foreignWeekdaysTotalAmount}`.slice(1));
                // return foreignWeekdaysTotalAmount;
                break;
            case 2:
                foreignWeekdaysTotalAmount = toeflWeekdaysPaper;
                console.log(`the amount for toefl Weekdays paper are ${foreignWeekdaysTotalAmount}`);
                $('#foreign-weekdays-amount').html(`${foreignWeekdaysTotalAmount}`.slice(1));
                // return foreignWeekdaysTotalAmount;
                break;
            case 3:
                foreignWeekdaysTotalAmount = gmatWeekdaysPaper;
                console.log(`the amount for gmat Weekdays papers are ${foreignWeekdaysTotalAmount}`);
                $('#foreign-weekdays-amount').html(`${foreignWeekdaysTotalAmount}`.slice(1));
                // return foreignWeekdaysTotalAmount;
                break;
            default:
                foreignWeekdaysTotalAmount = 0;
                console.log(`no course selected hence amount for foreign Weekdays Total Amount papers are ${foreignWeekdaysTotalAmount}`);
                $('#foreign-weekdays-amount').html(0);
                // return foreignWeekdaysTotalAmount;
                break;
        }
        // return foreignWeekdaysTotalAmount;
    }


    
    /****************************************************************************/
    // get amount of foreign weekdays papers
    let foreignWeekendsTotalAmount = 0;
    function getForeignWeekendsTotalAmount(totalNumberOfForeignWeekdaysPapers) {
        let { ieltsWeekendsPaper, toeflWeekendsPaper, gmatWeekendsPaper, newStudentsFourPapers } = foreignWeekendsPrices.regular;
        switch (totalNumberOfForeignWeekdaysPapers) {
            case 1:
                foreignWeekendsTotalAmount = ieltsWeekendsPaper;
                console.log(`the amount for ielts Weekdays paper is ${foreignWeekendsTotalAmount}`);
                $('#foreign-weekends-amount').html(`${foreignWeekendsTotalAmount}`.slice(1));
                // return foreignWeekendsTotalAmount;
                break;
            case 2:
                foreignWeekendsTotalAmount = toeflWeekendsPaper;
                console.log(`the amount for toefl Weekdays paper are ${foreignWeekendsTotalAmount}`);
                $('#foreign-weekends-amount').html(`${foreignWeekendsTotalAmount}`.slice(1));
                // return foreignWeekendsTotalAmount;
                break;
            case 3:
                foreignWeekendsTotalAmount = gmatWeekendsPaper;
                console.log(`the amount for gmat Weekdays papers are ${foreignWeekendsTotalAmount}`);
                $('#foreign-weekends-amount').html(`${foreignWeekendsTotalAmount}`.slice(1));
                // return foreignWeekendsTotalAmount;
                break;
            default:
                foreignWeekendsTotalAmount = 0;
                console.log(`no course selected hence amount for foreign Weekends Total Amount papers are ${foreignWeekendsTotalAmount}`);
                $('#foreign-weekends-amount').html(0);
                // return foreignWeekendsTotalAmount;
                break;
        }
        // return foreignWeekendsTotalAmount;

    }


    // get citn total amount
    let foreignExamTotalAmount = $('#foreign-total-amount');
    function displayForeignCoursesTotalPrice() {
        let finalForeignWeekdaysPrice = parseInt($('#foreign-weekdays-amount').text());
        let finalForeignWeekendsPrice = parseInt($('#foreign-weekends-amount').text());
       foreignExamTotalAmount.text(finalForeignWeekdaysPrice + finalForeignWeekendsPrice);
        console.log(finalForeignWeekdaysPrice + finalForeignWeekendsPrice);
    }

})