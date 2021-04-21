# RequestPrice
Please download the Debendra folder and put it under MAGENT_ROOT/app/code

then run the following commands
php bin/magento setup:upgrade;
php bin/magento setup:di:compile;
php bin/magento setup:static-content:deploy -f;
php bin/magento cache:clean;
php bin/magento cache:flush;
php bin/magento indexer:reindex;
