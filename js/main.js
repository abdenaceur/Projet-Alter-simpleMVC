$(document).ready(function() {
    // JS pour le filtre dedans la list de produits de Magazine
    // Auteur: http://codepen.io/ShaneHicks/pen/rJGLj?editors=101
    var allSelectedClasses;
    allSelectedClasses = '';
    $('input[type="checkbox"]').click(function(){
        //ensure the correct classes are added to the running list
        if(this.checked){
            allSelectedClasses += '.' + $(this).val();
        }else{
            allSelectedClasses = allSelectedClasses.replace($(this).val(), '');
        }        
        //format the list of classes
        allSelectedClasses = allSelectedClasses.replace(' ', '');
        allSelectedClasses = allSelectedClasses.replace('..', '.');
        var selectedClasses;
        var allSelected;
        allSelected = '';
        
        //format these for the jquery selector
        selectedClasses = allSelectedClasses.split(".");
        for(var i=0;i < selectedClasses.length;i++){
            var item = selectedClasses[i];
            if(item.length > 0){
                if(allSelected.length == 0){
                    allSelected += '.' + item;
                }else{
                    allSelected += ', .' + item;
                }
            }
        }
        //show all divs by default
        $("div").show();
        //hide the necessary ones, include the 2 top level divs to prevent them hiding as well
        if(allSelected.length > 0){
            $("div:not(.filterList, .prodGrid, " + allSelected + ")").hide();
        }
    });
});