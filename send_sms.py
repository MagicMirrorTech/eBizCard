# Download the helper library from https://www.twilio.com/docs/python/install
from twilio.rest import Client


# Your Account Sid and Auth Token from twilio.com/console
# DANGER! This is insecure. See http://twil.io/secure
account_sid = 'AC245c139f65e2b4ef73b7674f9821654f'
auth_token = 'a52c4546ee363f2a5b5ba817a9e05d20'
client = Client(account_sid, auth_token)

message = client.messages \
                .create(
                     body="Join Earth's mightiest heroes. Like Kevin Bacon.",
                     from_='+15122702303',
                     media_url=['https://ebizcard.netlify.com/dan/dan_h.vcf'],
                     to='+13368800967'
                 )

print(message.sid)
