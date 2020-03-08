var vCardsJS = require('vcards-js');

//create a new vCard
var vCard = vCardsJS();

//set properties
vCard.firstName = 'Dan';
vCard.middleName = '';
vCard.lastName = 'Hoffman';
vCard.organization = 'Best Deal In Town';
vCard.photo.attachFromUrl('');
vCard.workPhone = '720-236-8795';
vCard.title = 'Manager';
vCard.url = 'https://www.bestdealdenver.com';
vCard.address = '';
vCard.note = '';

//save to file
vCard.saveToFile('./eric-nesser.vcf');

//get as formatted string
console.log(vCard.getFormattedString());
