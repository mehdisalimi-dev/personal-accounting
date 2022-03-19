# Mini Personal Accounting

A micro program to enter personal costs as well as getting a report of the sum of all costs plus each category

## Installation

-open up a terminal

```bash
cd project directory

cp .env.example .env

./vendor/bin/sail up -d

alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

sail artisan migrate

sail artisan db:seed
```

## Usage

#import postman collection

find personal_accounting.postman_collection.json in root of project and import to postman

#register user 

First register user and after that you can get generated token 

#login user 

You can login with registered user data and get generated token

#Set new cost

From costs/insert collection set got token in header and cost data in body of your Json and set new cost

#Costs report 

From costs/report collection set got token in header and you can get report of costs by category


## Architecture
This project is on onion architecture , onion Architecture is based on the inversion of control principle. Onion Architecture is comprised of multiple concentric layers interfacing each other towards the core that represents the domain. The architecture does not depend on the data layer as in classic multi-tier architectures, but on the actual domain models.

![alt text](https://miro.medium.com/max/1400/1*B4LEEv0PbmqvYolUH-mCzw.png )


- This project does not have many achievements, but it has tried to maintain a clean architecture and can be developed and supported for a large software
