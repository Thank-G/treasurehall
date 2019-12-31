
$(document).ready(function () {


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

})


