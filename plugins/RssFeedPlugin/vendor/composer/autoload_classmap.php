<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname(dirname($vendorDir)));

return array(
    'PicoFeed\\Base' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Base.php',
    'PicoFeed\\Client\\Client' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/Client.php',
    'PicoFeed\\Client\\ClientException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/ClientException.php',
    'PicoFeed\\Client\\Curl' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/Curl.php',
    'PicoFeed\\Client\\ForbiddenException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/ForbiddenException.php',
    'PicoFeed\\Client\\HttpHeaders' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/HttpHeaders.php',
    'PicoFeed\\Client\\InvalidCertificateException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/InvalidCertificateException.php',
    'PicoFeed\\Client\\InvalidUrlException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/InvalidUrlException.php',
    'PicoFeed\\Client\\MaxRedirectException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/MaxRedirectException.php',
    'PicoFeed\\Client\\MaxSizeException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/MaxSizeException.php',
    'PicoFeed\\Client\\Stream' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/Stream.php',
    'PicoFeed\\Client\\TimeoutException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/TimeoutException.php',
    'PicoFeed\\Client\\UnauthorizedException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/UnauthorizedException.php',
    'PicoFeed\\Client\\Url' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Client/Url.php',
    'PicoFeed\\Config\\Config' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Config/Config.php',
    'PicoFeed\\Encoding\\Encoding' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Encoding/Encoding.php',
    'PicoFeed\\Filter\\Attribute' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Filter/Attribute.php',
    'PicoFeed\\Filter\\Filter' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Filter/Filter.php',
    'PicoFeed\\Filter\\Html' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Filter/Html.php',
    'PicoFeed\\Filter\\Tag' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Filter/Tag.php',
    'PicoFeed\\Generator\\ContentGeneratorInterface' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Generator/ContentGeneratorInterface.php',
    'PicoFeed\\Generator\\FileContentGenerator' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Generator/FileContentGenerator.php',
    'PicoFeed\\Generator\\YoutubeContentGenerator' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Generator/YoutubeContentGenerator.php',
    'PicoFeed\\Logging\\Logger' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Logging/Logger.php',
    'PicoFeed\\Parser\\Atom' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Atom.php',
    'PicoFeed\\Parser\\DateParser' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/DateParser.php',
    'PicoFeed\\Parser\\Feed' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Feed.php',
    'PicoFeed\\Parser\\Item' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Item.php',
    'PicoFeed\\Parser\\MalformedXmlException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/MalformedXmlException.php',
    'PicoFeed\\Parser\\Parser' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Parser.php',
    'PicoFeed\\Parser\\ParserException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/ParserException.php',
    'PicoFeed\\Parser\\ParserInterface' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/ParserInterface.php',
    'PicoFeed\\Parser\\Rss10' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss10.php',
    'PicoFeed\\Parser\\Rss20' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss20.php',
    'PicoFeed\\Parser\\Rss91' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss91.php',
    'PicoFeed\\Parser\\Rss92' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss92.php',
    'PicoFeed\\Parser\\XmlEntityException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/XmlEntityException.php',
    'PicoFeed\\Parser\\XmlParser' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Parser/XmlParser.php',
    'PicoFeed\\PicoFeedException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/PicoFeedException.php',
    'PicoFeed\\Processor\\ContentFilterProcessor' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Processor/ContentFilterProcessor.php',
    'PicoFeed\\Processor\\ContentGeneratorProcessor' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Processor/ContentGeneratorProcessor.php',
    'PicoFeed\\Processor\\ItemPostProcessor' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Processor/ItemPostProcessor.php',
    'PicoFeed\\Processor\\ItemProcessorInterface' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Processor/ItemProcessorInterface.php',
    'PicoFeed\\Processor\\ScraperProcessor' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Processor/ScraperProcessor.php',
    'PicoFeed\\Reader\\Favicon' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Reader/Favicon.php',
    'PicoFeed\\Reader\\Reader' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Reader/Reader.php',
    'PicoFeed\\Reader\\ReaderException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Reader/ReaderException.php',
    'PicoFeed\\Reader\\SubscriptionNotFoundException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Reader/SubscriptionNotFoundException.php',
    'PicoFeed\\Reader\\UnsupportedFeedFormatException' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Reader/UnsupportedFeedFormatException.php',
    'PicoFeed\\Scraper\\CandidateParser' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Scraper/CandidateParser.php',
    'PicoFeed\\Scraper\\ParserInterface' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Scraper/ParserInterface.php',
    'PicoFeed\\Scraper\\RuleLoader' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Scraper/RuleLoader.php',
    'PicoFeed\\Scraper\\RuleParser' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Scraper/RuleParser.php',
    'PicoFeed\\Scraper\\Scraper' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Scraper/Scraper.php',
    'PicoFeed\\Serialization\\Subscription' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Serialization/Subscription.php',
    'PicoFeed\\Serialization\\SubscriptionList' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionList.php',
    'PicoFeed\\Serialization\\SubscriptionListBuilder' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionListBuilder.php',
    'PicoFeed\\Serialization\\SubscriptionListParser' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionListParser.php',
    'PicoFeed\\Serialization\\SubscriptionParser' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionParser.php',
    'PicoFeed\\Syndication\\AtomFeedBuilder' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomFeedBuilder.php',
    'PicoFeed\\Syndication\\AtomHelper' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomHelper.php',
    'PicoFeed\\Syndication\\AtomItemBuilder' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomItemBuilder.php',
    'PicoFeed\\Syndication\\FeedBuilder' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/FeedBuilder.php',
    'PicoFeed\\Syndication\\ItemBuilder' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/ItemBuilder.php',
    'PicoFeed\\Syndication\\Rss20FeedBuilder' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20FeedBuilder.php',
    'PicoFeed\\Syndication\\Rss20Helper' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20Helper.php',
    'PicoFeed\\Syndication\\Rss20ItemBuilder' => $vendorDir . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20ItemBuilder.php',
    'ZendXml\\Exception\\ExceptionInterface' => $vendorDir . '/zendframework/zendxml/library/ZendXml/Exception/ExceptionInterface.php',
    'ZendXml\\Exception\\InvalidArgumentException' => $vendorDir . '/zendframework/zendxml/library/ZendXml/Exception/InvalidArgumentException.php',
    'ZendXml\\Exception\\RuntimeException' => $vendorDir . '/zendframework/zendxml/library/ZendXml/Exception/RuntimeException.php',
    'ZendXml\\Security' => $vendorDir . '/zendframework/zendxml/library/ZendXml/Security.php',
);
