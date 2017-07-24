### EPAY IS CURRENTLY DOWN

# Ethereum Faucet - ePay

This script allows you to run an Ethereum faucet on a website. It is built using ePay scripts. It includes games and a twitter feed to provide the user with content to view while waiting for the faucter timer to reset. 

## Getting Started

If you upload the files directly to your server, your will need to setup the needed configuration parameters found within the ```configs``` folder. This includes the database and API information required for reCaptcha and SolveMedia using the files ```configs.php``` and ```dbinfo.php```. The games can be exchanged for any HTML game set to the proper sizes, and the Twitter feed and resources page should be replaced with your own content.

### Cryptocurrencies Used

Intially, this script was meant to be used with ePay by passing your API information to keep track of the prizes and your wallet. ePay allowed you to use about a dozen different cryptocurrencies, including Bitcoin, Ethereum, Litecoin and some others. As of the time of this update, ePay is no longer in service, rendering the site's script unusable. I am currently looking for another way to provide prizes without going through an external site like ePay again.

### Installing

Copy the all the contents into your web server change the required information in the config folder. **There may be issues with the install process since ePay is down**

## Things To Fix

* Find a different service or create functions to process API requests for an Ethereum wallet.

## Built With

* PHP
* Smarty
* Sweaty hands
* ePay Faucet script

## Contributing

Feel free to point out anything that can be improved or added!


## Authors

* **Bryan Torres** - *modifications to existing ePay script* - [BryTorres](https://github.com/brytorres)


