
$(document).ready(function(){
    let filterForm = $('#filterForm');
    let newsAll__filter__link = $('a[type="checkbox"]');
    let resultSection = $('#result_section');


    let showMoreButton = $('.filter_show_more');
    console.log(showMoreButton);
    newsAll__filter__link.click(function(e){
        formValues = filterForm.serialize();
        getMessage(formValues)
    });


    newsAll__filter__link.click(function(e){
        formValues = filterForm.serialize();
        getMessage(formValues)
    });


    function getMessage(formValues) {
        $.ajax({
           type:'POST',
           url:'/articles/ajax-filter',
           data:formValues,
           success:function(res){
            resultSection.empty();
            resultSection.append(res)
           },
           error: function(errors) {
          }
        });
    }
})



