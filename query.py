import oauth2 as oauth
import urllib2 as urllib
import json
from pprint import pprint

# Fill in these values
consumer_key = ''
consumer_secret = ''
token = ''
token_secret = ''

_debug = 0

oauth_token    = oauth.Token(key=token, secret=token_secret)
oauth_consumer = oauth.Consumer(key=consumer_key, secret=consumer_secret)

signature_method_hmac_sha1 = oauth.SignatureMethod_HMAC_SHA1()

http_method = "GET"


http_handler  = urllib.HTTPHandler(debuglevel=_debug)
https_handler = urllib.HTTPSHandler(debuglevel=_debug)

'''
Construct, sign, and open a twitter request
using the hard-coded credentials above.
'''
def yelpreq(url, method, terms, location):
  consumer = oauth.Consumer(consumer_key, consumer_secret)
  req = oauth.Request('GET', url+"?term="+terms+"&location="+location)
  req.update({'oauth_nonce': oauth.generate_nonce(),
                      'oauth_timestamp': oauth.generate_timestamp(),
                      'oauth_token': token,
                      'oauth_consumer_key': consumer_key})

  tokens = oauth.Token(token, token_secret)

  req.sign_request(oauth.SignatureMethod_HMAC_SHA1(), consumer, tokens)

  url = req.to_url()

  headers = req.to_header()

  if http_method == "POST":
    encoded_post_data = req.to_postdata()
  else:
    encoded_post_data = None
    url = req.to_url()

  opener = urllib.OpenerDirector()
  opener.add_handler(http_handler)
  opener.add_handler(https_handler)

  response = opener.open(url, encoded_post_data)

  return response

def fetchsamples():
  terms ="food"
  location="Burr+Ridge"
  response= yelpreq("http://api.yelp.com/v2/search", "GET", terms, location)
  

  data = json.load(response)
  for i in range(len(data['businesses'])):
  	print data['businesses'][i]['id']


  #businesses=[]
  #for line in response:
#	businesses.append(json.loads(line.encode('utf-8')))
  #print len(businesses)

if __name__ == '__main__':
  fetchsamples()
