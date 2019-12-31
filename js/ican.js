// ican paper prices
let icanFoundationPrices = {
    newStudents: {
        newStudentsOnePaper: '₦17500',
        newStudentsTwoPapers: '₦30000',
        newStudentsThreePapers: '₦42000',
        newStudentsFourPapers: '₦49000',
        newStudentsFivePapers: '₦55000'
    },
    returningStudents: {
        returningStudentsOnePaper: '₦16500',
        returningStudentsTwoPapers: '₦28500',
        returningStudentsThreePapers: '₦40000',
        returningStudentsFourPapers: '₦47000',
        returningStudentsFivePapers: '₦53000'
    },
    firstTwentyPromo: {
        firstTwentyPromoOnePaper: '₦15000',
        firstTwentyPromoTwoPapers: '₦27000',
        firstTwentyPromoThreePapers: '₦37000',
        firstTwentyPromoFourPapers: '₦46000',
        firstTwentyPromoFivePapers: '₦50000'
    }
}

let icanSkillsPrices = {
    newStudents: {
        newStudentsOnePaper: '₦21000',
        newStudentsTwoPapers: '₦33000',
        newStudentsThreePapers: '₦44000',
        newStudentsFourPapers: '₦52000',
        newStudentsFivePapers: '₦58000'
    },
    returningStudents: {
        returningStudentsOnePaper: '₦20000',
        returningStudentsTwoPapers: '₦31500',
        returningStudentsThreePapers: '₦40000',
        returningStudentsFourPapers: '₦49000',
        returningStudentsFivePapers: '₦55000'
    },
    firstTwentyPromo: {
        firstTwentyPromoOnePaper: '₦18000',
        firstTwentyPromoTwoPapers: '₦30000',
        firstTwentyPromoThreePapers: '₦38000',
        firstTwentyPromoFourPapers: '₦47000',
        firstTwentyPromoFivePapers: '₦53000'
    }
}

let icanProfessionalPrices = {
    newStudents: {
        newStudentsOnePaper: '₦23000',
        newStudentsTwoPapers: '₦34000',
        newStudentsThreePapers: '₦45000',
        newStudentsFourPapers: '₦53000',
        newStudentsFivePapers: '₦60000'
    },
    returningStudents: {
        returningStudentsOnePaper: '₦21500',
        returningStudentsTwoPapers: '₦31000',
        returningStudentsThreePapers: '₦43000',
        returningStudentsFourPapers: '₦51000',
        returningStudentsFivePapers: '₦57000'
    },
    firstTwentyPromo: {
        firstTwentyPromoOnePaper: '₦20000',
        firstTwentyPromoTwoPapers: '₦29000',
        firstTwentyPromoThreePapers: '₦41000',
        firstTwentyPromoFourPapers: '₦49000',
        firstTwentyPromoFivePapers: '₦55000'
    }
}


$(document).ready(function () {
    // get foundation number of papers
    let icanFoundationCount = 0;
    $('#ican-foundation-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            icanFoundationCount++;
            $('#ican-foundation-papers').html(icanFoundationCount);
        }
        if ($(this).prop('checked') != 1) {
            icanFoundationCount--;
            $('#ican-foundation-papers').html(icanFoundationCount);
        }
        getIcanTotalPapers();
        getIcanFoundationTotalAmount(icanFoundationCount);
        displayIcanTotalPrice();
    })

    // get skills number of papers
    let icanSkillsCount = 0;
    $('#ican-skills-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            icanSkillsCount++;
            $('#ican-skills-papers').html(icanSkillsCount);
        }
        if ($(this).prop('checked') != 1) {
            icanSkillsCount--;
            $('#ican-skills-papers').html(icanSkillsCount);
        }
        getIcanTotalPapers();
        getIcanSkillsTotalAmount(icanSkillsCount);
        displayIcanTotalPrice();
    })

    // get professional number of papers
    let icanProfessionalCount = 0;
    $('#ican-professional-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            icanProfessionalCount++;
            $('#ican-professional-papers').html(icanProfessionalCount);
        }
        if ($(this).prop('checked') != 1) {
            icanProfessionalCount--;
            $('#ican-professional-papers').html(icanProfessionalCount);
        }
        getIcanTotalPapers();
        getIcanProfessionalTotalAmount(icanProfessionalCount);
        displayIcanTotalPrice();
    })

    // get total papers number of papers
    let icanTotalPapers = $('#ican-total-papers');
    function getIcanTotalPapers() {
        let icanFoundation = parseInt($('#ican-foundation-papers').text());
        let icanSkills = parseInt($('#ican-skills-papers').text());
        let icanProfessional = parseInt($('#ican-professional-papers').text());
        icanTotalPapers.text(icanFoundation + icanSkills + icanProfessional);
    }


    // get amount of icanFoundationTotalAmount papers
    let icanFoundationTotalAmount = 0;
    function getIcanFoundationTotalAmount(totalNumberOfIcanFoundationPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers, newStudentsFivePapers } = icanFoundationPrices.newStudents;

        switch (totalNumberOfIcanFoundationPapers) {
            case 1:
                icanFoundationTotalAmount = newStudentsOnePaper;
                console.log(`the amount for one icanFoundationTotalAmount paper is ${icanFoundationTotalAmount}`);
                $('#ican-foundation-amount').html(`${icanFoundationTotalAmount}`.slice(1));
                return icanFoundationTotalAmount;
                break;
            case 2:
                icanFoundationTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                $('#ican-foundation-amount').html(`${icanFoundationTotalAmount}`.slice(1));
                // return icanFoundationTotalAmount;
                break;
            case 3:
                icanFoundationTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                $('#ican-foundation-amount').html(`${icanFoundationTotalAmount}`.slice(1));
                // return icanFoundationTotalAmount;
                break;
            case 4:
                icanFoundationTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                $('#ican-foundation-amount').html(`${icanFoundationTotalAmount}`.slice(1));
                // return icanFoundationTotalAmount;
                break;
            case 5:
                icanFoundationTotalAmount = newStudentsFivePapers;
                console.log(`the amount for four icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                $('#ican-foundation-amount').html(`${icanFoundationTotalAmount}`.slice(1));
                // return icanFoundationTotalAmount;
                break;
            default:
                icanFoundationTotalAmount = 0;
                console.log(`no course selected hence amount for icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                $('#ican-foundation-amount').html(0);
                // return icanFoundationTotalAmount;
                break;
        }
        // return citnProfTaxIIITotalAmount;
    }

    // get amount of icanSkillsTotalAmount papers
    let icanSkillsTotalAmount = 0;
    function getIcanSkillsTotalAmount(totalNumberOfIcanSkillsPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers, newStudentsFivePapers } = icanSkillsPrices.newStudents;

        switch (totalNumberOfIcanSkillsPapers) {
            case 1:
                icanSkillsTotalAmount = newStudentsOnePaper;
                console.log(`the amount for one icanSkillsTotalAmount paper is ${icanSkillsTotalAmount}`);
                $('#ican-skills-amount').html(`${icanSkillsTotalAmount}`.slice(1));
                // return icanSkillsTotalAmount;
                break;
            case 2:
                icanSkillsTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                $('#ican-skills-amount').html(`${icanSkillsTotalAmount}`.slice(1));
                // return icanSkillsTotalAmount;
                break;
            case 3:
                icanSkillsTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                $('#ican-skills-amount').html(`${icanSkillsTotalAmount}`.slice(1));
                // return icanSkillsTotalAmount;
                break;
            case 4:
                icanSkillsTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                $('#ican-skills-amount').html(`${icanSkillsTotalAmount}`.slice(1));
                // return icanSkillsTotalAmount;
                break;
            case 5:
                icanSkillsTotalAmount = newStudentsFivePapers;
                console.log(`the amount for four icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                $('#ican-skills-amount').html(`${icanSkillsTotalAmount}`.slice(1));
                // return icanSkillsTotalAmount;
                break;
            default:
                icanSkillsTotalAmount = 0;
                console.log(`no course selected hence amount for icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                $('#ican-skills-amount').html(0);
                // return icanSkillsTotalAmount;
                break;
        }
        // return icanSkillsTotalAmount;
    }


    // get amount of icanProfessionalTotalAmount papers
    let icanProfessionalTotalAmount = 0;
    function getIcanProfessionalTotalAmount(totalNumberOfIcanProfessionalPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers, newStudentsFivePapers } = icanProfessionalPrices.newStudents;

        switch (totalNumberOfIcanProfessionalPapers) {
            case 1:
                icanProfessionalTotalAmount = newStudentsOnePaper;
                console.log(`the amount for one icanProfessionalTotalAmount paper is ${icanProfessionalTotalAmount}`);
                $('#ican-professional-amount').html(`${icanProfessionalTotalAmount}`.slice(1));
                // return icanProfessionalTotalAmount;
                break;
            case 2:
                icanProfessionalTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                $('#ican-professional-amount').html(`${icanProfessionalTotalAmount}`.slice(1));
                // return icanProfessionalTotalAmount;
                break;
            case 3:
                icanProfessionalTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                $('#ican-professional-amount').html(`${icanProfessionalTotalAmount}`.slice(1));
                // return icanProfessionalTotalAmount;
                break;
            case 4:
                icanProfessionalTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                $('#ican-professional-amount').html(`${icanProfessionalTotalAmount}`.slice(1));
                // return icanProfessionalTotalAmount;
                break;
            case 5:
                icanProfessionalTotalAmount = newStudentsFivePapers;
                console.log(`the amount for four icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                $('#ican-professional-amount').html(`${icanProfessionalTotalAmount}`.slice(1));
                // return icanProfessionalTotalAmount;
                break;
            default:
                icanProfessionalTotalAmount = 0;
                console.log(`no course selected hence amount for icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                $('#ican-professional-amount').html(0);
                // return icanProfessionalTotalAmount;
                break;
        }
        // return icanProfessionalTotalAmount;
    }


    // get ican total amount
    let icanTotalAmount = $('#ican-total-amount');
    function displayIcanTotalPrice() {
        let finalIcanFoundationPrice = parseInt($('#ican-foundation-amount').text());
        let finalIcanSkillsPrice = parseInt($('#ican-skills-amount').text());
        let finalIcanProfessionalPrice = parseInt($('#ican-professional-amount').text());
        icanTotalAmount.text(finalIcanFoundationPrice + finalIcanSkillsPrice + finalIcanProfessionalPrice);
        console.log(finalIcanFoundationPrice + finalIcanSkillsPrice + finalIcanProfessionalPrice);
    }
})