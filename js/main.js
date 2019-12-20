// paper prices
let foundationPrices = {
    newStudents: 'N17500',
    returningStudents: 'N16500',
    firstTwentyPromo: 'N15000'
}

// load course prices dynamically
let taxationPrice, businessFinancePrice, financialAcctPrice, managementInfoPrice, businessLawPrice = null;
taxationPrice = $('#taxationPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
businessFinancePrice = $('#businessFinancePrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
financialAcctPrice = $('#financialAcctPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
managementInfoPrice = $('#managementInfoPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
businessLawPrice = $('#businessLawPrice').html(`<strong> ${foundationPrices.newStudents} </strong>`);
