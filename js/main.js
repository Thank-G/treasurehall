$(document).ready(function () {
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
    function populateIcanFoundationPrices() {
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
    function populateIcanSkillsPrices() {
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
    function populateIcanProfessionalPrices() {
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
    function populateCitnFoundationPrices() {
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
    function populateCitnProfTaxIPrices() {
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
    function populateCitnProfTaxIIPrices() {
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
    function populateCitnProfTaxIIIPrices() {
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
    function populateAtswaIPrices() {
        let { atswaIPricesOnePaper, atswaIPricesTwoPapers, atswaIPricesThreePapers, atswaIPricesFourPapers } = atswaIPrices;

        $('#atswa-i-one-paper').html(` ${atswaIPricesOnePaper} `);
        $('#atswa-i-two-papers').html(` ${atswaIPricesTwoPapers} `);
        $('#atswa-i-three-papers').html(` ${atswaIPricesThreePapers} `);
        $('#atswa-i-four-papers').html(` ${atswaIPricesFourPapers} `);
    }
    populateAtswaIPrices();

    // populate atswa ii course prices
    function populateAtswaIIPrices() {
        let { atswaIIPricesOnePaper, atswaIIPricesTwoPapers, atswaIIPricesThreePapers, atswaIIPricesFourPapers } = atswaIIPrices;

        $('#atswa-ii-one-paper').html(` ${atswaIIPricesOnePaper} `);
        $('#atswa-ii-two-papers').html(` ${atswaIIPricesTwoPapers} `);
        $('#atswa-ii-three-papers').html(` ${atswaIIPricesThreePapers} `);
        $('#atswa-ii-four-papers').html(` ${atswaIIPricesFourPapers} `);

    }
    populateAtswaIIPrices();

    // populate atswa iii course prices
    function populateAtswaIIIPrices() {
        let { atswaIIIPricesOnePaper, atswaIIIPricesTwoPapers, atswaIIIPricesThreePapers, atswaIIIPricesFourPapers } = atswaIIIPrices;

        $('#atswa-iii-one-paper').html(` ${atswaIIIPricesOnePaper} `);
        $('#atswa-iii-two-papers').html(` ${atswaIIIPricesTwoPapers} `);
        $('#atswa-iii-three-papers').html(` ${atswaIIIPricesThreePapers} `);
        $('#atswa-iii-four-papers').html(` ${atswaIIIPricesFourPapers} `);

    }
    populateAtswaIIIPrices();


    // get foundation number of papers for ICAN
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
    })

    // get total papers number of papers
    let icanTotalPapers = $('#ican-total-papers');
    function getIcanTotalPapers() {
        let icanFoundation = parseInt($('#ican-foundation-papers').text());
        let icanSkills = parseInt($('#ican-skills-papers').text());
        let icanProfessional = parseInt($('#ican-professional-papers').text());
        icanTotalPapers.text(icanFoundation + icanSkills + icanProfessional);
    }


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
    })

    // get prof tax III number of papers
    let citnProfTaxIIICount = 0;
    $('#citn-prof-tax-iii-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            citnProfTaxIIICount++;
            $('#citn-prof-tax-iii-papers').html(citnProfTaxIIICount);
        }
        if ($(this).prop('checked') != 1) {
            citnProfTaxIIICount--;
            $('#citn-prof-tax-iii-papers').html(citnProfTaxIIICount);
        }
        getCitnTotalPapers();
        getCitnProfTaxIIITotalAmount(citnProfTaxIIICount);
    })


    /****************************************************************************/
    // get total papers number of papers
    let citnTotalPapers = $('#citn-total-papers');
    function getCitnTotalPapers() {
        let citnFoundation = parseInt($('#citn-foundation-papers').text());
        let citnProfTaxI = parseInt($('#citn-prof-tax-i-papers').text());
        let citnProfTaxII = parseInt($('#citn-prof-tax-ii-papers').text());
        let citnProfTaxIII = parseInt($('#citn-prof-tax-iii-papers').text());
        citnTotalPapers.text(citnFoundation + citnProfTaxI + citnProfTaxII + citnProfTaxIII);
    }


    /****************************************************************************/
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
        return atswaICount;
    })


    /****************************************************************************/
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
        return atswaIICount;
    })


    /****************************************************************************/
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
        return atswaIIICount;
    })


    /****************************************************************************/
    // get atswa total number of papers
    let atswaTotalPapers = $('#atswa-total-papers');
    function getAtswaTotalPapers() {
        let atswaI = parseInt($('#atswa-i-papers').text());
        let atswaII = parseInt($('#atswa-ii-papers').text());
        let atswaIII = parseInt($('#atswa-iii-papers').text());
        atswaTotalPapers.text(atswaI + atswaII + atswaIII);
    }

    /****************************************************************************/
    // get amount of icanFoundationTotalAmount papers
    let icanFoundationTotalAmount = 0;
    function getIcanFoundationTotalAmount(totalNumberOfIcanFoundationPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers, newStudentsFivePapers } = icanFoundationPrices.newStudents;

        switch (totalNumberOfIcanFoundationPapers) {
            case 1:
                icanFoundationTotalAmount = newStudentsOnePaper;
                console.log(`the amount for one icanFoundationTotalAmount paper is ${icanFoundationTotalAmount}`);
                return icanFoundationTotalAmount;
                break;
            case 2:
                icanFoundationTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                return icanFoundationTotalAmount;
                break;
            case 3:
                icanFoundationTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                return icanFoundationTotalAmount;
                break;
            case 4:
                icanFoundationTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                return icanFoundationTotalAmount;
                break;
            case 5:
                icanFoundationTotalAmount = newStudentsFivePapers;
                console.log(`the amount for four icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                return icanFoundationTotalAmount;
                break;
            default:
                icanFoundationTotalAmount = 0;
                console.log(`no course selected hence amount for icanFoundationTotalAmount papers are ${icanFoundationTotalAmount}`);
                return icanFoundationTotalAmount;
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
                return icanSkillsTotalAmount;
                break;
            case 2:
                icanSkillsTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                return icanSkillsTotalAmount;
                break;
            case 3:
                icanSkillsTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                return icanSkillsTotalAmount;
                break;
            case 4:
                icanSkillsTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                return icanSkillsTotalAmount;
                break;
            case 5:
                icanSkillsTotalAmount = newStudentsFivePapers;
                console.log(`the amount for four icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                return icanSkillsTotalAmount;
                break;
            default:
                icanSkillsTotalAmount = 0;
                console.log(`no course selected hence amount for icanSkillsTotalAmount papers are ${icanSkillsTotalAmount}`);
                return icanSkillsTotalAmount;
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
                return icanProfessionalTotalAmount;
                break;
            case 2:
                icanProfessionalTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                return icanProfessionalTotalAmount;
                break;
            case 3:
                icanProfessionalTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                return icanProfessionalTotalAmount;
                break;
            case 4:
                icanProfessionalTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                return icanProfessionalTotalAmount;
                break;
            case 5:
                icanProfessionalTotalAmount = newStudentsFivePapers;
                console.log(`the amount for four icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                return icanProfessionalTotalAmount;
                break;
            default:
                icanProfessionalTotalAmount = 0;
                console.log(`no course selected hence amount for icanProfessionalTotalAmount papers are ${icanProfessionalTotalAmount}`);
                return icanProfessionalTotalAmount;
                break;
        }
        // return icanProfessionalTotalAmount;
    }



    /****************************************************************************/
    // get amount of citnFoundation papers
    let citnFoundationTotalAmount = 0;
    function getCitnFoundationTotalAmount(totalNumberOfCitnFoundationPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnFoundationPrices.regular;
        switch (totalNumberOfCitnFoundationPapers) {
            case 1:
                citnFoundationTotalAmount = newStudentsOnePaper;
                console.log(`the amount for one citnFoundation paper is ${citnFoundationTotalAmount}`);
                return citnFoundationTotalAmount;
                break;
            case 2:
                citnFoundationTotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two citnFoundation papers are ${citnFoundationTotalAmount}`);
                return citnFoundationTotalAmount;
                break;
            case 3:
                citnFoundationTotalAmount = newStudentsThreePapers;
                console.log(`the amount for three citnFoundation papers are ${citnFoundationTotalAmount}`);
                return citnFoundationTotalAmount;
                break;
            case 4:
                citnFoundationTotalAmount = newStudentsFourPapers;
                console.log(`the amount for four atswaI papers are ${citnFoundationTotalAmount}`);
                return citnFoundationTotalAmount;
                break;
            default:
                citnFoundationTotalAmount = 0;
                console.log(`no course selected hence amount for atswaI papers are ${atswaITotalAmount}`);
                return citnFoundationTotalAmount;
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
                return citnProfTaxITotalAmount;
                break;
            case 2:
                citnProfTaxITotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                return citnProfTaxITotalAmount;
                break;
            case 3:
                citnProfTaxITotalAmount = newStudentsThreePapers;
                console.log(`the amount for three citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                return citnProfTaxITotalAmount;
                break;
            case 4:
                citnProfTaxITotalAmount = newStudentsFourPapers;
                console.log(`the amount for four citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                return citnProfTaxITotalAmount;
                break;
            default:
                citnProfTaxITotalAmount = 0;
                console.log(`no course selected hence amount for citnProfTaxITotalAmount papers are ${citnProfTaxITotalAmount}`);
                return citnProfTaxITotalAmount;
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
                return citnProfTaxIITotalAmount;
                break;
            case 2:
                citnProfTaxIITotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                return citnProfTaxIITotalAmount;
                break;
            case 3:
                citnProfTaxIITotalAmount = newStudentsThreePapers;
                console.log(`the amount for three citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                return citnProfTaxIITotalAmount;
                break;
            case 4:
                citnProfTaxIITotalAmount = newStudentsFourPapers;
                console.log(`the amount for four citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                return citnProfTaxIITotalAmount;
                break;
            default:
                citnProfTaxIITotalAmount = 0;
                console.log(`no course selected hence amount for citnProfTaxIITotalAmount papers are ${citnProfTaxIITotalAmount}`);
                return citnProfTaxIITotalAmount;
                break;
        }
        // return citnProfTaxIITotalAmount;
    }


    /****************************************************************************/
    // get amount of citnProfTaxIIITotalAmount papers
    let citnProfTaxIIITotalAmount = 0;
    function getCitnProfTaxIIITotalAmount(totalNumberOfProfTaxIIIPapers) {
        let { newStudentsOnePaper, newStudentsTwoPapers, newStudentsThreePapers, newStudentsFourPapers } = citnProfTaxIIIPrices.regular;
        switch (totalNumberOfProfTaxIIIPapers) {
            case 1:
                citnProfTaxIIITotalAmount = newStudentsOnePaper;
                console.log(`the amount for one citnProfTaxIIITotalAmount paper is ${citnProfTaxIIITotalAmount}`);
                return citnProfTaxIIITotalAmount;
                break;
            case 2:
                citnProfTaxIIITotalAmount = newStudentsTwoPapers;
                console.log(`the amount for two citnProfTaxIIITotalAmount papers are ${citnProfTaxIIITotalAmount}`);
                return citnProfTaxIIITotalAmount;
                break;
            case 3:
                citnProfTaxIIITotalAmount = newStudentsThreePapers;
                console.log(`the amount for three citnProfTaxIIITotalAmount papers are ${citnProfTaxIIITotalAmount}`);
                return citnProfTaxIIITotalAmount;
                break;
            case 4:
                citnProfTaxIIITotalAmount = newStudentsFourPapers;
                console.log(`the amount for four citnProfTaxIIITotalAmount papers are ${citnProfTaxIIITotalAmount}`);
                return citnProfTaxIIITotalAmount;
                break;
            default:
                citnProfTaxIIITotalAmount = 0;
                console.log(`no course selected hence amount for citnProfTaxIIITotalAmount papers are ${citnProfTaxIIITotalAmount}`);
                return citnProfTaxIIITotalAmount;
                break;
        }
        // return citnProfTaxIIITotalAmount;
    }


    /****************************************************************************/
    // get amount of atswaI papers
    let atswaITotalAmount = 0;
    function getAtswaITotalAmount(totalNumberOfAtswaIPapers) {
        let { atswaIPricesOnePaper, atswaIPricesTwoPapers, atswaIPricesThreePapers, atswaIPricesFourPapers } = atswaIPrices;
        switch (totalNumberOfAtswaIPapers) {
            case 1:
                atswaITotalAmount = atswaIPricesOnePaper;
                // console.log(`the amount for one atswaI paper is ${atswaITotalAmount}`);
                return atswaITotalAmount;
                break;
            case 2:
                atswaITotalAmount = atswaIPricesTwoPapers;
                // console.log(`the amount for two atswaI papers are ${atswaITotalAmount}`);
                return atswaITotalAmount;
                break;
            case 3:
                atswaITotalAmount = atswaIPricesThreePapers;
                // console.log(`the amount for three atswaI papers are ${atswaITotalAmount}`);
                return atswaITotalAmount;
                break;
            case 4:
                atswaITotalAmount = atswaIPricesFourPapers;
                // console.log(`the amount for four atswaI papers are ${atswaITotalAmount}`);
                return atswaITotalAmount;
                break;
            default:
                atswaITotalAmount = 0;
                // console.log(`no course selected hence amount for atswaI papers are ${atswaITotalAmount}`);
                return atswaITotalAmount;
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
                // console.log(`the amount for one atswaII paper is ${atswaIITotalAmount}`);
                return atswaIITotalAmount;
                break;
            case 2:
                atswaIITotalAmount = atswaIIPricesTwoPapers;
                // console.log(`the amount for two atswaII papers are ${atswaIITotalAmount}`);
                return atswaIITotalAmount;
                break;
            case 3:
                atswaIITotalAmount = atswaIIPricesThreePapers;
                // console.log(`the amount for three atswaII papers are ${atswaIITotalAmount}`);
                return atswaIITotalAmount;
                break;
            case 4:
                atswaIITotalAmount = atswaIIPricesFourPapers;
                // console.log(`the amount for four atswaII papers are ${atswaIITotalAmount}`);
                return atswaIITotalAmount;
                break;
            default:
                atswaIITotalAmount = 0;
                // console.log(`no course selected hence amount for atswaII papers are ${atswaIITotalAmount}`);
                return atswaIITotalAmount;
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
                // console.log(`the amount for one atswaIII paper is ${atswaIIITotalAmount}`);
                return atswaIIITotalAmount;
                break;
            case 2:
                atswaIIITotalAmount = atswaIIIPricesTwoPapers;
                // console.log(`the amount for two atswaIII papers are ${atswaIIITotalAmount}`);
                return atswaIIITotalAmount;
                break;
            case 3:
                atswaIIITotalAmount = atswaIIIPricesThreePapers;
                // console.log(`the amount for three atswaIII papers are ${atswaIIITotalAmount}`);
                return atswaIIITotalAmount;
                break;
            case 4:
                atswaIIITotalAmount = atswaIIIPricesFourPapers;
                // console.log(`the amount for four atswaIII papers are ${atswaIIITotalAmount}`);
                return atswaIIITotalAmount;
                break;
            default:
                atswaIIITotalAmount = 0;
                // console.log(`no course selected hence amount for atswaIII papers are ${atswaIIITotalAmount}`);
                return atswaIIITotalAmount;
                break;
        }
        return atswaITotalAmount;
    }


    /****************************************************************************/
    let atswaTotalAmount = $('#atswa-total-amount');
    // let atswaTotalPapersText = atswaTotalPapers.text();
    // atswaTotalAmountText = atswaTotalAmount.text();
    function displayTotalPrice() {
        let finalAtswaIPrice = getAtswaITotalAmount(atswaICount);
        let finalAtswaIIPrice = getAtswaIITotalAmount(atswaIICount);
        let finalAtswaIIIPrice = getAtswaIIITotalAmount(atswaIIICount);

        // console.log(finalAtswaIPrice);
        // console.log(finalAtswaIIPrice);
        // console.log(finalAtswaIIIPrice);
    }
    displayTotalPrice();


})





// let atswaIPrices = {
//     atswaIPricesOnePaper: '₦14500',
//     atswaIPricesTwoPapers: '₦18500',
//     atswaIPricesThreePapers: '₦22500',
//     atswaIPricesFourPapers: '₦27000'
// }

// let atswaIIPrices = {
//     atswaIIPricesOnePaper: '₦17000',
//     atswaIIPricesTwoPapers: '₦19500',
//     atswaIIPricesThreePapers: '₦24500',
//     atswaIIPricesFourPapers: '₦32500'
// }

// let atswaIIIPrices = {
//     atswaIIIPricesOnePaper: '₦18500',
//     atswaIIIPricesTwoPapers: '₦23500',
//     atswaIIIPricesThreePapers: '₦28500',
//     atswaIIIPricesFourPapers: '₦35500'
// }