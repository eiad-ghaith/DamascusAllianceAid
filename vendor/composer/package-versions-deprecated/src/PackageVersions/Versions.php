<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'churchcrm/crm';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'azuyalabs/yasumi' => '2.3.0@e2f37e6de3b15642b83275a24bbfe101cd5c7791',
  'bacon/bacon-qr-code' => '2.0.3@3e9d791b67d0a2912922b7b7c7312f4b37af41e4',
  'clue/stream-filter' => 'v1.5.0@aeb7d8ea49c7963d3b581378955dbf5bc49aa320',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'dasprid/enum' => '1.0.3@5abf82f213618696dda8e3bf6f64dd042d8542b2',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'drewm/mailchimp-api' => 'v2.5.4@c6cdfab4ca6ddbc3b260913470bd0a4a5cb84c7a',
  'endroid/qr-code' => '3.9.6@9cdd4f5d609bfc8811ca4a62b4d23eb16976242f',
  'geocoder-php/bing-maps-provider' => '4.2.0@c01c7dea17ccfd590043e7685f2fa54b4e2f432a',
  'geocoder-php/common-http' => '4.4.0@9f44a006d4b45d01dd31ea9b38ee7fb5724cd73e',
  'geocoder-php/google-maps-provider' => '4.6.0@1e88138b66bf31b7e025b7bd579edb2cc9690414',
  'gettext/gettext' => 'v5.5.4@77baf40326b4eac0230cd11ee75680969dcbe72a',
  'gettext/languages' => '2.6.0@38ea0482f649e0802e475f0ed19fa993bcb7a618',
  'guzzlehttp/guzzle' => '7.2.0@0aa74dfb41ae110835923ef10a9d803a22d50e79',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'ifsnop/mysqldump-php' => 'v2.9@fc9c119fe5d70af9a685cad6a8ac612fd7589e25',
  'khanamiryan/qrcode-detector-decoder' => '1.0.4@07fceefb79d895e858e52921afb9c1433d2f3d5e',
  'knplabs/github-api' => 'v2.19.0@271b3ca6f7b315c3dae1fcf2be8bb2912a93587d',
  'laminas/laminas-diactoros' => '2.5.0@4ff7400c1c12e404144992ef43c8b733fd9ad516',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'lcobucci/jwt' => '3.4.4@ff92156cd27d3abe7fc8814516ae0615215f01ae',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'mustache/mustache' => 'v2.13.0@e95c5a008c23d3151d59ea72484d4f72049ab7f4',
  'myclabs/php-enum' => '1.7.7@d178027d1e679832db9f38248fcc7200647dc2b7',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'paragonie/constant_time_encoding' => 'v2.4.0@f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'php-http/cache-plugin' => '1.7.1@a1cb3e2a4f095f820e0a0e078f3dfd2d9c83a0f7',
  'php-http/client-common' => '2.3.0@e37e46c610c87519753135fb893111798c69076a',
  'php-http/discovery' => '1.13.0@788f72d64c43dc361e7fcc7464c3d947c64984a7',
  'php-http/guzzle7-adapter' => '0.1.1@1967de656b9679a2a6a66d0e4e16fa99bbed1ad1',
  'php-http/httplug' => '2.2.0@191a0a1b41ed026b717421931f8d3bd2514ffbf9',
  'php-http/message' => '1.11.0@fb0dbce7355cad4f4f6a225f537c34d013571f29',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpmailer/phpmailer' => 'v6.2.0@e38888a75c070304ca5514197d4847a59a5c853f',
  'pimple/pimple' => 'v3.3.1@21e45061c3429b1e06233475cc0e1f6fc774d5b0',
  'pragmarx/google2fa' => '8.0.0@26c4c5cf30a2844ba121760fd7301f8ad240100b',
  'propel/propel' => '2.0.0-alpha11@3cc71ba71031c6ca2e0aa82e8c9e2bd01a36c811',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'setasign/fpdf' => '1.8.2@d77904018090c17dc9f3ab6e944679a7a47e710a',
  'slim/http-cache' => '1.1.0@d1a091aca45695a2159194132872f4a544416bc9',
  'slim/php-view' => '3.1.0@c9ec5e4027d113af35816098f9059ef5c3e3000c',
  'slim/slim' => '3.12.3@1c9318a84ffb890900901136d620b4f03a59da38',
  'symfony/config' => 'v5.2.3@50e0e1314a3b2609d32b6a5a0d0fb5342494c4ab',
  'symfony/console' => 'v5.2.3@89d4b176d12a2946a1ae4e34906a025b7b6b135a',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/filesystem' => 'v5.2.3@262d033b57c73e8b59cd6e68a45c528318b15038',
  'symfony/finder' => 'v5.2.3@4adc8d172d602008c204c2e16956f99257248e03',
  'symfony/options-resolver' => 'v5.2.3@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-ctype' => 'v1.22.0@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-intl-grapheme' => 'v1.22.0@267a9adeb8ecb8071040a740930e077cdfb987af',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php73' => 'v1.22.0@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/property-access' => 'v5.2.3@3af8ed262bd3217512a13b023981fe68f36ad5f3',
  'symfony/property-info' => 'v5.2.3@4e4f368c3737b1c175d66f4fc0b99a5bcd161a77',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.2.3@c95468897f408dd0aca2ff582074423dd0455122',
  'symfony/translation' => 'v5.2.3@c021864d4354ee55160ddcfd31dc477a1bc77949',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/validator' => 'v5.2.3@d83d2a9f060ce42636feef6af6facc39793354cf',
  'symfony/yaml' => 'v5.2.3@338cddc6d74929f6adf19ca5682ac4b8e109cdb0',
  'verot/class.upload.php' => '2.1.0@4d9aae875245948d21e42ade332fb45f897f28bb',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.7.1@c9bd01868339fc1c74e631d73d7333250b8eccbd',
  'vonage/nexmo-bridge' => '0.1.0@62653b1165f4401580ca8d2b859f59c968de3711',
  'willdurand/geocoder' => '4.4.0@3e86f5b10ab0cef1cf03f979fe8e34b6476daff0',
  'churchcrm/crm' => '4.3.1@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
