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

let citnProfTaxIIIPrices = {
    regular: {
        newStudentsOnePaper: '',
        newStudentsTwoPapers: '',
        newStudentsThreePapers: '',
        newStudentsFourPapers: ''
    },
    firstTenPromo: {
        firstTenPromoOnePaper: '',
        firstTenPromoTwoPapers: '',
        firstTenPromoThreePapers: '',
        firstTenPromoFourPapers: ''
    }
}

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


// populate ican foundation course prices
function populateIcanFoundationPrices () {
    let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers, newStudentsFivePapers } = icanFoundationPrices.newStudents;

    let { returningStudentsOnePaper, returningStudentsTwoPapers, returningStudentsThreePapers, returningStudentsFourPapers, returningStudentsFivePapers } = icanFoundationPrices.returningStudents;

    let { firstTwentyPromoOnePaper, firstTwentyPromoTwoPapers, firstTwentyPromoThreePapers, firstTwentyPromoFourPapers, firstTwentyPromoFivePapers } = icanFoundationPrices.firstTwentyPromo;

    $('#ican-foundation-new-one-paper').html(` ${newStudentsOnePaper} `);
    $('#ican-foundation-new-two-papers').html(` ${newStudentsTwoPapers} `);
    $('#ican-foundation-new-three-papers').html(` ${newStudentsThreePapers} `);
    $('#ican-foundation-new-four-papers').html(` ${newStudentsFourPapers} `);
    $('#ican-foundation-new-five-papers').html(` ${newStudentsFivePapers} `);

    $('#ican-foundation-returning-one-paper').html(` ${returningStudentsOnePaper} `);
    $('#ican-foundation-returning-two-papers').html(` ${returningStudentsTwoPapers} `);
    $('#ican-foundation-returning-three-papers').html(` ${returningStudentsThreePapers} `);
    $('#ican-foundation-returning-four-papers').html(` ${returningStudentsFourPapers} `);
    $('#ican-foundation-returning-five-papers').html(` ${returningStudentsFivePapers} `);

    $('#ican-foundation-promo-one-paper').html(` ${firstTwentyPromoOnePaper} `);
    $('#ican-foundation-promo-two-papers').html(` ${firstTwentyPromoTwoPapers} `);
    $('#ican-foundation-promo-three-papers').html(` ${firstTwentyPromoThreePapers} `);
    $('#ican-foundation-promo-four-papers').html(` ${firstTwentyPromoFourPapers} `);
    $('#ican-foundation-promo-five-papers').html(` ${firstTwentyPromoFivePapers} `);
}
populateIcanFoundationPrices();

// populate ican skills course prices
function populateIcanSkillsPrices () {
    let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers, newStudentsFivePapers } = icanSkillsPrices.newStudents;

    let { returningStudentsOnePaper, returningStudentsTwoPapers, returningStudentsThreePapers, returningStudentsFourPapers, returningStudentsFivePapers } = icanSkillsPrices.returningStudents;

    let { firstTwentyPromoOnePaper, firstTwentyPromoTwoPapers, firstTwentyPromoThreePapers, firstTwentyPromoFourPapers, firstTwentyPromoFivePapers } = icanSkillsPrices.firstTwentyPromo;

    $('#ican-skills-new-one-paper').html(` ${newStudentsOnePaper} `);
    $('#ican-skills-new-two-papers').html(` ${newStudentsTwoPapers} `);
    $('#ican-skills-new-three-papers').html(` ${newStudentsThreePapers} `);
    $('#ican-skills-new-four-papers').html(` ${newStudentsFourPapers} `);
    $('#ican-skills-new-five-papers').html(` ${newStudentsFivePapers} `);

    $('#ican-skills-returning-one-paper').html(` ${returningStudentsOnePaper} `);
    $('#ican-skills-returning-two-papers').html(` ${returningStudentsTwoPapers} `);
    $('#ican-skills-returning-three-papers').html(` ${returningStudentsThreePapers} `);
    $('#ican-skills-returning-four-papers').html(` ${returningStudentsFourPapers} `);
    $('#ican-skills-returning-five-papers').html(` ${returningStudentsFivePapers} `);

    $('#ican-skills-promo-one-paper').html(` ${firstTwentyPromoOnePaper} `);
    $('#ican-skills-promo-two-papers').html(` ${firstTwentyPromoTwoPapers} `);
    $('#ican-skills-promo-three-papers').html(` ${firstTwentyPromoThreePapers} `);
    $('#ican-skills-promo-four-papers').html(` ${firstTwentyPromoFourPapers} `);
    $('#ican-skills-promo-five-papers').html(` ${firstTwentyPromoFivePapers} `);
}
populateIcanSkillsPrices();

// populate ican professional course prices
function populateIcanProfessionalPrices () {
    let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers, newStudentsFivePapers } = icanProfessionalPrices.newStudents;

    let { returningStudentsOnePaper, returningStudentsTwoPapers, returningStudentsThreePapers, returningStudentsFourPapers, returningStudentsFivePapers } = icanProfessionalPrices.returningStudents;

    let { firstTwentyPromoOnePaper, firstTwentyPromoTwoPapers, firstTwentyPromoThreePapers, firstTwentyPromoFourPapers, firstTwentyPromoFivePapers } = icanProfessionalPrices.firstTwentyPromo;

    $('#ican-professional-new-one-paper').html(` ${newStudentsOnePaper} `);
    $('#ican-professional-new-two-papers').html(` ${newStudentsTwoPapers} `);
    $('#ican-professional-new-three-papers').html(` ${newStudentsThreePapers} `);
    $('#ican-professional-new-four-papers').html(` ${newStudentsFourPapers} `);
    $('#ican-professional-new-five-papers').html(` ${newStudentsFivePapers} `);

    $('#ican-professional-returning-one-paper').html(` ${returningStudentsOnePaper} `);
    $('#ican-professional-returning-two-papers').html(` ${returningStudentsTwoPapers} `);
    $('#ican-professional-returning-three-papers').html(` ${returningStudentsThreePapers} `);
    $('#ican-professional-returning-four-papers').html(` ${returningStudentsFourPapers} `);
    $('#ican-professional-returning-five-papers').html(` ${returningStudentsFivePapers} `);

    $('#ican-professional-promo-one-paper').html(` ${firstTwentyPromoOnePaper} `);
    $('#ican-professional-promo-two-papers').html(` ${firstTwentyPromoTwoPapers} `);
    $('#ican-professional-promo-three-papers').html(` ${firstTwentyPromoThreePapers} `);
    $('#ican-professional-promo-four-papers').html(` ${firstTwentyPromoFourPapers} `);
    $('#ican-professional-promo-five-papers').html(` ${firstTwentyPromoFivePapers} `);
}
populateIcanProfessionalPrices();

// populate citn foundation course prices
function populateCitnFoundationPrices () {
    let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnFoundationPrices.regular;

    let { firstTenPromoOnePaper, firstTenPromoTwoPapers, firstTenPromoThreePapers, firstTenPromoFourPapers } = citnFoundationPrices.firstTenPromo;

    $('#citn-foundation-regular-one-paper').html(` ${newStudentsOnePaper} `);
    $('#citn-foundation-regular-two-papers').html(` ${newStudentsTwoPapers} `);
    $('#citn-foundation-regular-three-papers').html(` ${newStudentsThreePapers} `);
    $('#citn-foundation-regular-four-papers').html(` ${newStudentsFourPapers} `);

    $('#citn-foundation-promo-one-paper').html(` ${firstTenPromoOnePaper} `);
    $('#citn-foundation-promo-two-papers').html(` ${firstTenPromoTwoPapers} `);
    $('#citn-foundation-promo-three-papers').html(` ${firstTenPromoThreePapers} `);
    $('#citn-foundation-promo-four-papers').html(` ${firstTenPromoFourPapers} `);
}
populateCitnFoundationPrices();

// populate citn prof tax i course prices
function populateCitnProfTaxIPrices () {
    let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnProfTaxIPrices.regular;

    let { firstTenPromoOnePaper, firstTenPromoTwoPapers, firstTenPromoThreePapers, firstTenPromoFourPapers } = citnProfTaxIPrices.firstTenPromo;

    $('#citn-prof-tax-i-regular-one-paper').html(` ${newStudentsOnePaper} `);
    $('#citn-prof-tax-i-regular-two-papers').html(` ${newStudentsTwoPapers} `);
    $('#citn-prof-tax-i-regular-three-papers').html(` ${newStudentsThreePapers} `);
    $('#citn-prof-tax-i-regular-four-papers').html(` ${newStudentsFourPapers} `);

    $('#citn-prof-tax-i-promo-one-paper').html(` ${firstTenPromoOnePaper} `);
    $('#citn-prof-tax-i-promo-two-papers').html(` ${firstTenPromoTwoPapers} `);
    $('#citn-prof-tax-i-promo-three-papers').html(` ${firstTenPromoThreePapers} `);
    $('#citn-prof-tax-i-promo-four-papers').html(` ${firstTenPromoFourPapers} `);
}
populateCitnProfTaxIPrices();

// populate citn prof tax ii course prices
function populateCitnProfTaxIIPrices () {
    let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnProfTaxIPrices.regular;

    let { firstTenPromoOnePaper, firstTenPromoTwoPapers, firstTenPromoThreePapers, firstTenPromoFourPapers } = citnProfTaxIPrices.firstTenPromo;

    $('#citn-prof-tax-ii-regular-one-paper').html(` ${newStudentsOnePaper} `);
    $('#citn-prof-tax-ii-regular-two-papers').html(` ${newStudentsTwoPapers} `);
    $('#citn-prof-tax-ii-regular-three-papers').html(` ${newStudentsThreePapers} `);
    $('#citn-prof-tax-ii-regular-four-papers').html(` ${newStudentsFourPapers} `);

    $('#citn-prof-tax-ii-promo-one-paper').html(` ${firstTenPromoOnePaper} `);
    $('#citn-prof-tax-ii-promo-two-papers').html(` ${firstTenPromoTwoPapers} `);
    $('#citn-prof-tax-ii-promo-three-papers').html(` ${firstTenPromoThreePapers} `);
    $('#citn-prof-tax-ii-promo-four-papers').html(` ${firstTenPromoFourPapers} `);
}
populateCitnProfTaxIIPrices();

// populate citn prof tax iii course prices
function populateCitnProfTaxIIIPrices () {
    let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnProfTaxIPrices.regular;

    let { firstTenPromoOnePaper, firstTenPromoTwoPapers, firstTenPromoThreePapers, firstTenPromoFourPapers } = citnProfTaxIPrices.firstTenPromo;

    $('#citn-prof-tax-iii-regular-one-paper').html(` ${newStudentsOnePaper} `);
    $('#citn-prof-tax-iii-regular-two-papers').html(` ${newStudentsTwoPapers} `);
    $('#citn-prof-tax-iii-regular-three-papers').html(` ${newStudentsThreePapers} `);
    $('#citn-prof-tax-iii-regular-four-papers').html(` ${newStudentsFourPapers} `);

    $('#citn-prof-tax-iii-promo-one-paper').html(` ${firstTenPromoOnePaper} `);
    $('#citn-prof-tax-iii-promo-two-papers').html(` ${firstTenPromoTwoPapers} `);
    $('#citn-prof-tax-iii-promo-three-papers').html(` ${firstTenPromoThreePapers} `);
    $('#citn-prof-tax-iii-promo-four-papers').html(` ${firstTenPromoFourPapers} `);
}
populateCitnProfTaxIIIPrices();

// populate atswa i course prices
function populateAtswaIPrices () {
    let { atswaIPricesOnePaper, atswaIPricesTwoPapers, atswaIPricesThreePapers, atswaIPricesFourPapers } = atswaIPrices;

    $('#atswa-i-one-paper').html(` ${atswaIPricesOnePaper} `);
    $('#atswa-i-two-papers').html(` ${atswaIPricesTwoPapers} `);
    $('#atswa-i-three-papers').html(` ${atswaIPricesThreePapers} `);
    $('#atswa-i-four-papers').html(` ${atswaIPricesFourPapers} `);
}
populateAtswaIPrices();

// populate atswa ii course prices
function populateAtswaIIPrices () {
    let { atswaIIPricesOnePaper, atswaIIPricesTwoPapers, atswaIIPricesThreePapers, atswaIIPricesFourPapers } = atswaIIPrices;

    $('#atswa-ii-one-paper').html(` ${atswaIIPricesOnePaper} `);
    $('#atswa-ii-two-papers').html(` ${atswaIIPricesTwoPapers} `);
    $('#atswa-ii-three-papers').html(` ${atswaIIPricesThreePapers} `);
    $('#atswa-ii-four-papers').html(` ${atswaIIPricesFourPapers} `);

}
populateAtswaIIPrices();

// populate atswa iii course prices
function populateAtswaIIIPrices () {
    let { atswaIIIPricesOnePaper, atswaIIIPricesTwoPapers, atswaIIIPricesThreePapers, atswaIIIPricesFourPapers } = atswaIIIPrices;

    $('#atswa-iii-one-paper').html(` ${atswaIIIPricesOnePaper} `);
    $('#atswa-iii-two-papers').html(` ${atswaIIIPricesTwoPapers} `);
    $('#atswa-iii-three-papers').html(` ${atswaIIIPricesThreePapers} `);
    $('#atswa-iii-four-papers').html(` ${atswaIIIPricesFourPapers} `);

}
populateAtswaIIIPrices();
































// let taxationPrice, businessFinancePrice, financialAcctPrice, managementInfoPrice, businessLawPrice = null;
// taxationPrice = $('#taxationPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
// businessFinancePrice = $('#businessFinancePrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
// financialAcctPrice = $('#financialAcctPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
// managementInfoPrice = $('#managementInfoPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
// businessLawPrice = $('#businessLawPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);

// // populate skills course prices 
// let financialReportingPrice, auditInsurancePrice, performanceMgtPrice, publicSectorPrice, corporateMgtPrice = null;
// financialReportingPrice = $('#financialReportingPrice').html(`<strong> ${skillsPrices.newStudents} </strong>`);
// auditInsurancePrice = $('#auditInsurancePrice').html(`<strong> ${skillsPrices.newStudents} </strong>`);
// performanceMgtPrice = $('#performanceMgtPrice').html(`<strong> ${skillsPrices.newStudents} </strong>`);
// publicSectorPrice = $('#publicSectorPrice').html(`<strong> ${skillsPrices.newStudents} </strong>`);
// corporateMgtPrice = $('#corporateMgtPrice').html(`<strong> ${skillsPrices.newStudents} </strong>`);

// // populate professional course prices 
// let corporateReportingPrice, advInsurancePrice, strategicFinMgtPrice, advancedTaxationPrice, caseStudyPrice = null;
// corporateReportingPrice = $('#corporateReportingPrice').html(`<strong> ${professionalPrices.newStudents} </strong>`);
// advInsurancePrice = $('#advInsurancePrice').html(`<strong> ${professionalPrices.newStudents} </strong>`);
// strategicFinMgtPrice = $('#strategicFinMgtPrice').html(`<strong> ${professionalPrices.newStudents} </strong>`);
// advancedTaxationPrice = $('#advancedTaxationPrice').html(`<strong> ${professionalPrices.newStudents} </strong>`);
// caseStudyPrice = $('#caseStudyPrice').html(`<strong> ${professionalPrices.newStudents} </strong>`);



// ₦