
$(document).ready(function () {

    // get miscelaneous number of papers
    let miscelaneousCount = 0;
    $('#miscelaneous-courses-selected > div > input:checkbox').click(function () {
        console.log()
        if ($(this).prop('checked') == 1) {
            miscelaneousCount++;
            $('#miscelaneous-papers').html(miscelaneousCount);
        }
        if ($(this).prop('checked') != 1) {
            miscelaneousCount--;
            $('#miscelaneous-papers').html(miscelaneousCount);
        }
        getMiscelaneousTotalPapers();
    })


    // get miscelaneous total number of papers
    let miscelaneousTotalPapers = $('#miscelaneous-total-papers');
    function getMiscelaneousTotalPapers() {
        let miscelaneous = parseInt($('#miscelaneous-papers').text());
        miscelaneousTotalPapers.text(miscelaneous);
    }
})
