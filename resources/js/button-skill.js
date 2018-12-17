$(document).ready(function () {
  var spanValue =  $('#counter').text();  
  var counter = parseInt(spanValue)
  $('#add').click(function () {
    if (counter == 3) {
      return false
    }
    counter++;
    var idSkill = 'skill-' + counter;
    var textSkill = ' text-skill-' + counter;
    var btnRemove = 'btn-remove-' + counter;

    var newFrom = '<div id=' + idSkill + ' class="input-group mb-3">' +
      '<input class="form-control form-control-sm" id=' + textSkill + ' placeholder=' + idSkill + ' name="skills[]" type="text">' +
      '<div class="input-group-append">' +
      '<button class="btn btn-danger btn-sm" id=' + btnRemove + ' type="button">Delete</button>' +
      '</div>' +
      '</div>';
    $('#field-skill').append(newFrom);
  });

  $('#field-skill').click(function (e) {
    if(counter < 2){
      return false;
    }
    try {
      var btnRemove = e.target.id;
      console.log(counter);
      
      var fieldSkill = $('#' + btnRemove).parent().parent().get(0).id;
      if (fieldSkill === 'field-skill'){
        return false;
      }
      $('#' + fieldSkill).remove();
      counter--;
    }
    catch (e) {
      return true;
    }
  });
})