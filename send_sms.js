

const accountSid = process.env.TWILIO_ACCOUNT_SID;
const authToken = process.env.TWILIO_AUTH_TOKEN;
const client = require('twilio')(accountSid, authToken);

var num = '3368800967';
var sendTo = '+1'+num;

var emp = '/' + 'dan/dan_h.vcf';


client.messages
  .create({
     body: 'This is the ship that made the Kessel Run in fourteen parsecs?',
     from: '+14692085882',
		 mediaUrl: ['https://ebizcard.netlify.com/'+emp],
     to: sendTo
   })
  .then(message => console.log(message.sid));
