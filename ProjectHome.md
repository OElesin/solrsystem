[Solr](http://lucene.apache.org/solr/) is a blindingly fast way of returning full-text searches on data.

This is the SolrSystem class.  It abstracts the Solr functionality so that a [PHP](http://php.net) developer can use it without having to know too much about how to formulate a Solr query. The syntax is based upon the [CodeIgniter active record class](http://codeigniter.com/user_guide/database/active_record.html).

This library uses [Solr-PHP-Client](http://code.google.com/p/solr-php-client/) to make the connections to the Solr instance. This class is written for PHP5 as the Solr-PHP-Client would need considerable reworking to make it work in PHP4.

## Disclaimer ##

This PHP library is not part of the Apache Solr project, nor is it maintained by the Apache Software Foundation. All linked Apache Solr documentation or logos remain the sole property of the Apache Solr project, its authors, and the Apache Software Foundation.