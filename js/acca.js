
// acca paper prices
let accaAppKnowledgeLevel = {
    accaAppliedKnowledgeLevelPricesOnePaper: '₦23000',
    accaAppliedKnowledgeLevelPricesTwoPapers: '₦43700',
    accaAppliedKnowledgeLevelPricesThreePapers: '₦64400'
}

let accaAppSkillsLevel = {
    accaCorporateBusinessLawPrice: '₦25000',
    accaPerformanceManagementPrice: '₦26000',
    accaTaxationPrice: '₦26000',
    accaFinancialReportingPrice: '₦26000',
    accaAuditAssurancePrice: '₦26000',
    accaFinancialManagementPrice: '₦26000'
}

let accaStratProfLevel = {
    accaStrategicBusinessReportingPrice: '₦37000',
    accaStrategicBusinessLeaderPrice: '₦39000',
    accaAdvancedFinancialManagementPrice: '₦34000',
    accaAdvancedPerformanceManagementPrice: '₦34000',
    accaAdvancedAuditAssurancePrice: '₦34000'
}



$(document).ready(function () {

    // get applied knowledge level number of papers for 
    let accaAppliedKnowledgeLevelCount = 0;
    $('#acca-applied-knowledge-level-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            accaAppliedKnowledgeLevelCount++;
            $('#acca-applied-knowledge-level-papers').html(accaAppliedKnowledgeLevelCount);
        }
        if ($(this).prop('checked') != 1) {
            accaAppliedKnowledgeLevelCount--;
            $('#acca-applied-knowledge-level-papers').html(accaAppliedKnowledgeLevelCount);
        }
        getAccaTotalPapers();
        getAccaAppliedKnowledgeLevelTotalAmount(accaAppliedKnowledgeLevelCount);
        displayAccaTotalPrice();
    })


    // get applied skills level number of papers for 
    let accaAppliedSkillsLevelCount = 0;
    let courseId = [ corporateBusiness, performanceManagement, accaTaxation, financialReporting, auditAssurance, financialManagement ];
    $('#acca-applied-skills-level-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            accaAppliedSkillsLevelCount++;
            $('#acca-applied-skills-level-papers').html(accaAppliedSkillsLevelCount);
        }
        if ($(this).prop('checked') != 1) {
            accaAppliedSkillsLevelCount--;
            $('#acca-applied-skills-level-papers').html(accaAppliedSkillsLevelCount);
        }
        getAccaTotalPapers();
        for (let i = 0; i < courseId.length; i++) {
            getAccaAppliedSkillsLevelTotalAmount(courseId[i]);
        }
        displayAccaTotalPrice();
    })

    // get strategic professional level number of papers for 
    let accaStrategicProfLevelCount = 0;
    $('#acca-strategic-professional-level-courses-selected > div > input:checkbox').click(function () {
        if ($(this).prop('checked') == 1) {
            accaStrategicProfLevelCount++;
            $('#acca-strategic-professional-level-papers').html(accaStrategicProfLevelCount);
        }
        if ($(this).prop('checked') != 1) {
            accaStrategicProfLevelCount--;
            $('#acca-strategic-professional-level-papers').html(accaStrategicProfLevelCount);
        }
        getAccaTotalPapers();
        getAccaStrategicProfLevelTotalAmount(accaStrategicProfLevelCount);
        displayAccaTotalPrice();
    })


    // get total papers number of papers
    let accaTotalPapers = $('#acca-total-papers');
    function getAccaTotalPapers() {
        let accaAppliedKnowledgeLevel = parseInt($('#acca-applied-knowledge-level-papers').text());
        let accaAppliedSkillsLevel = parseInt($('#acca-applied-skills-level-papers').text());
        let accaStrategicProfessionalLevel = parseInt($('#acca-strategic-professional-level-papers').text());
        accaTotalPapers.text(accaAppliedKnowledgeLevel + accaAppliedSkillsLevel + accaStrategicProfessionalLevel);
    }



    /****************************************************************************/
    // get amount of APPPLIED KNOWLEDGE LEVEL papers
    let accaAppliedKnowledgeLevelTotalAmount = 0;
    function getAccaAppliedKnowledgeLevelTotalAmount(totalNumberOfAccaAppliedKnowledgeLevelPapers) {
        let { accaAppliedKnowledgeLevelPricesOnePaper, accaAppliedKnowledgeLevelPricesTwoPapers, accaAppliedKnowledgeLevelPricesThreePapers } = accaAppKnowledgeLevel;
        switch (totalNumberOfAccaAppliedKnowledgeLevelPapers) {
            case 1:
                accaAppliedKnowledgeLevelTotalAmount = accaAppliedKnowledgeLevelPricesOnePaper;
                console.log(`the amount for one applied knowledge level paper is ${accaAppliedKnowledgeLevelPricesOnePaper}`);
                $('#acca-applied-knowledge-level-amount').html(`${accaAppliedKnowledgeLevelTotalAmount}`.slice(1));
                // return accaAppliedKnowledgeLevelTotalAmount;
                break;
            case 2:
                accaAppliedKnowledgeLevelTotalAmount = accaAppliedKnowledgeLevelPricesTwoPapers;
                console.log(`the amount for two applied knowledge level papers are ${accaAppliedKnowledgeLevelTotalAmount}`);
                $('#acca-applied-knowledge-level-amount').html(`${accaAppliedKnowledgeLevelTotalAmount}`.slice(1));
                // return accaAppliedKnowledgeLevelTotalAmount;
                break;
            case 3:
                accaAppliedKnowledgeLevelTotalAmount = accaAppliedKnowledgeLevelPricesThreePapers;
                console.log(`the amount for three applied knowledge level papers are ${accaAppliedKnowledgeLevelTotalAmount}`);
                $('#acca-applied-knowledge-level-amount').html(`${accaAppliedKnowledgeLevelTotalAmount}`.slice(1));
                // return accaAppliedKnowledgeLevelTotalAmount;
                break;
            default:
                accaAppliedKnowledgeLevelTotalAmount = 0;
                console.log(`no course selected hence amount for applied knowledge level papers are ${accaAppliedKnowledgeLevelTotalAmount}`);
                $('#acca-applied-knowledge-level-amount').html(0);
                // return accaAppliedKnowledgeLevelTotalAmount;
                break;
        }
        // return accaAppliedKnowledgeLevelTotalAmount;
    }



    /****************************************************************************/
    // get amount of APPPLIED SKILLS LEVEL papers
    // let accaAppliedSkillsLevelTotalAmount = 0;
    // function getAccaAppliedSkillsLevelTotalAmount(totalNumberOfAccaAppliedSkillsLevelPapers) {
    //     let { accaCorporateBusinessLawPrice, accaPerformanceManagementPrice, accaTaxationPrice, accaFinancialReportingPrice, accaAuditAssurancePrice, accaFinancialManagementPrice } = accaAppSkillsLevel;
    //     switch (totalNumberOfAccaAppliedSkillsLevelPapers) {
    //         case 1:
    //             accaAppliedSkillsLevelTotalAmount = accaCorporateBusinessLawPrice;
    //             console.log(`the amount for one applied skills level paper is ${accaAppliedSkillsLevelTotalAmount}`);
    //             $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
    //             break;
    //         case 2:
    //             accaAppliedSkillsLevelTotalAmount = accaPerformanceManagementPrice;
    //             console.log(`the amount for two applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
    //             $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
    //             break;
    //         case 3:
    //             accaAppliedSkillsLevelTotalAmount = accaTaxationPrice;
    //             console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
    //             $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
    //             break;
    //         case 4:
    //             accaAppliedSkillsLevelTotalAmount = accaFinancialReportingPrice;
    //             console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
    //             $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
    //             break;
    //         case 5:
    //             accaAppliedSkillsLevelTotalAmount = accaAuditAssurancePrice;
    //             console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
    //             $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
    //             break;
    //         case 6:
    //             accaAppliedSkillsLevelTotalAmount = accaFinancialManagementPrice;
    //             console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
    //             $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
    //             break;
    //         default:
    //             accaAppliedSkillsLevelTotalAmount = 0;
    //             console.log(`no course selected hence amount for applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
    //             $('#acca-applied-skills-level-amount').html(0);
    //             break;
    //     }
    // }



    /****************************************************************************/
    // get amount of APPPLIED SKILLS LEVEL papers
    let accaAppliedSkillsLevelTotalAmount = 0;
    function getAccaAppliedSkillsLevelTotalAmount(...courseId) {
        let { accaCorporateBusinessLawPrice, accaPerformanceManagementPrice, accaTaxationPrice, accaFinancialReportingPrice, accaAuditAssurancePrice, accaFinancialManagementPrice } = accaAppSkillsLevel;
        switch (courseId) {
            case $('#corporateBusiness'):
                accaAppliedSkillsLevelTotalAmount = accaCorporateBusinessLawPrice;
                console.log(`the amount for one applied skills level paper is ${accaAppliedSkillsLevelTotalAmount}`);
                $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
                break;
            case $('#performanceManagement'):
                accaAppliedSkillsLevelTotalAmount = accaPerformanceManagementPrice;
                console.log(`the amount for two applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
                $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
                break;
            case $('#accaTaxation'):
                accaAppliedSkillsLevelTotalAmount = accaTaxationPrice;
                console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
                $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
                break;
            case $('#financialReporting'):
                accaAppliedSkillsLevelTotalAmount = accaFinancialReportingPrice;
                console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
                $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
                break;
            case $('#auditAssurance'):
                accaAppliedSkillsLevelTotalAmount = accaAuditAssurancePrice;
                console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
                $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
                break;
            case $('#financialManagement'):
                accaAppliedSkillsLevelTotalAmount = accaFinancialManagementPrice;
                console.log(`the amount for three applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
                $('#acca-applied-skills-level-amount').html(`${accaAppliedSkillsLevelTotalAmount}`.slice(1));
                break;
            default:
                accaAppliedSkillsLevelTotalAmount = 0;
                console.log(`no course selected hence amount for applied skills level papers are ${accaAppliedSkillsLevelTotalAmount}`);
                $('#acca-applied-skills-level-amount').html(0);
                break;
        }
    }



    /****************************************************************************/
    // get amount of STRATEGIC PROFESSIONAL LEVEL papers
    let accaStrategicProfAmount = 0;
    function getAccaStrategicProfLevelTotalAmount(totalNumberOfAccaStrategicProfLevelPapers) {
        let { accaStrategicBusinessReportingPrice, accaStrategicBusinessLeaderPrice, accaAdvancedFinancialManagementPrice, accaAdvancedPerformanceManagementPrice, accaAdvancedAuditAssurancePrice } = accaStratProfLevel;
        switch (totalNumberOfAccaStrategicProfLevelPapers) {
            case 1:
                accaStrategicProfAmount = accaStrategicBusinessReportingPrice;
                console.log(`the amount for one strategic professional level paper is ${accaStrategicProfAmount}`);
                $('#acca-strategic-professional-level-amount').html(`${accaStrategicProfAmount}`.slice(1));
                // return accaStrategicProfAmount;
                break;
            case 2:
                accaStrategicProfAmount = accaStrategicBusinessLeaderPrice;
                console.log(`the amount for two strategic professional level papers are ${accaStrategicProfAmount}`);
                $('#acca-strategic-professional-level-amount').html(`${accaStrategicProfAmount}`.slice(1));
                // return accaStrategicBusinessLeaderPrice;
                break;
            case 3:
                accaStrategicProfAmount = accaAdvancedFinancialManagementPrice;
                console.log(`the amount for three strategic professional level papers are ${accaStrategicProfAmount}`);
                $('#acca-strategic-professional-level-amount').html(`${accaStrategicProfAmount}`.slice(1));
                // return accaStrategicProfAmount;
                break;
            case 4:
                accaStrategicProfAmount = accaAdvancedPerformanceManagementPrice;
                console.log(`the amount for four strategic professional level papers are ${accaStrategicProfAmount}`);
                $('#acca-strategic-professional-level-amount').html(`${accaStrategicProfAmount}`.slice(1));
                // return accaStrategicBusinessLeaderPrice;
                break;
                case 5:
                    accaStrategicProfAmount = accaAdvancedAuditAssurancePrice;
                    console.log(`the amount for five strategic professional level papers are ${accaStrategicProfAmount}`);
                    $('#acca-strategic-professional-level-amount').html(`${accaStrategicProfAmount}`.slice(1));
                    // return accaStrategicBusinessLeaderPrice;
                    break;
            default:
                accaStrategicProfAmount = 0;
                console.log(`no course selected hence amount for strategic professional level papers are ${accaStrategicProfAmount}`);
                $('#acca-strategic-professional-level-amount').html(0);
                // return accaStrategicProfAmount;
                break;
        }
        // return accaStrategicProfAmount;
    }






    // get acca total amount
    let accaTotalAmount = $('#acca-total-amount');
    function displayAccaTotalPrice() {
        let finalAppKnowledgeLevePrice = parseInt($('#acca-applied-knowledge-level-amount').text());
        let finalAppSkillsLevePrice = parseInt($('#acca-applied-skills-level-amount').text());
        let finalStrategicProfLevePrice = parseInt($('#acca-strategic-professional-level-amount').text());
        // let finalAdvTaxtionLevePrice = parseInt($('#acca-advanced-taxation-amount').text());
        accaTotalAmount.text(finalAppKnowledgeLevePrice + finalAppSkillsLevePrice + finalStrategicProfLevePrice);
        console.log(finalAppKnowledgeLevePrice + finalAppSkillsLevePrice + finalStrategicProfLevePrice);
    }
})