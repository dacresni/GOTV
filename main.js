var toastGroupTemplate = document.querySelector('#toastGroup');
toastGroupTemplate.showToast = function() {
  document.querySelector('#toast').show();
  Polymer({data:[{name: 'Bob', checked: true}, {name: 'Tim', checked: false} ]});
}
