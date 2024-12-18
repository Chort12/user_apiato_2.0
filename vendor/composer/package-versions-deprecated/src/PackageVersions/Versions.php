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
    const ROOT_PACKAGE_NAME = 'apiato/apiato';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'anourvalar/eloquent-serialize' => '1.2.27@f1c4fcd41a6db1467ed75bc295b62f582d6fd0fe',
  'apiato/container-installer' => 'v2.0.8@dbf85cf22b7954e03ccef993b659e7195444e17b',
  'apiato/core' => 'v8.14.0@91ca27c662c28252846f32459c464b4982080606',
  'apiato/documentation-generator-container' => 'v3.0.5@c22d6d4a6b4f598b4e68432175cfad479b48af64',
  'blade-ui-kit/blade-heroicons' => '2.5.0@4ed3ed08e9ac192d0d126b2f12711d6fb6576a48',
  'blade-ui-kit/blade-icons' => '1.7.2@75a54a3f5a2810fcf6574ab23e91b6cc229a1b53',
  'brick/math' => '0.12.1@f510c0a40911935b77b86859eb5223d58d660df1',
  'carbonphp/carbon-doctrine-types' => '2.1.0@99f76ffa36cce3b70a4a6abce41dba15ca2e84cb',
  'composer/semver' => '3.4.3@4313d26ada5e0c4edfbd1dc481a92ff7bff91f12',
  'danharrin/date-format-converter' => 'v0.3.1@7c31171bc981e48726729a5f3a05a2d2b63f0b1e',
  'danharrin/livewire-rate-limiting' => 'v1.3.1@1a1b299e20de61f88ed6e94ea0bbcfc33aab1ddb',
  'defuse/php-encryption' => 'v2.4.0@f53396c2d34225064647a05ca76c1da9d99e5828',
  'dflydev/dot-access-data' => 'v3.0.3@a23a2bf4f31d3518f3ecb38660c95715dfead60f',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/dbal' => '3.9.3@61446f07fcb522414d6cfd8b1c3e5f9e18c579ba',
  'doctrine/deprecations' => '1.1.3@dfbaa3c2d2e9a9df1118213f3b8b0c597bb99fab',
  'doctrine/event-manager' => '2.0.1@b680156fa328f1dfd874fd48c7026c41570b9c6e',
  'doctrine/inflector' => '2.0.10@5817d0659c5b50c9b950feb9af7b9668e2c436bc',
  'doctrine/lexer' => '3.0.1@31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
  'dragonmantank/cron-expression' => 'v3.4.0@8c784d071debd117328803d86b2097615b457500',
  'egulias/email-validator' => '4.0.2@ebaaf5be6c0286928352e054f2d5125608e5405e',
  'filament/actions' => 'v3.2.127@f325e315c365cfcea5c9da96662ddea37e3663fc',
  'filament/filament' => 'v3.2.127@4aea767e8c872842b624fe47affe078433111259',
  'filament/forms' => 'v3.2.127@c78071f1aabb63a0d9bf74268005d3294b61dc2a',
  'filament/infolists' => 'v3.2.127@e655ac3900ab2109022aa0243cfb4126729ef431',
  'filament/notifications' => 'v3.2.127@c19df07c801c5550de0d30957c5a316f53019533',
  'filament/spatie-laravel-media-library-plugin' => 'v3.2.0@5b3eb2b086fff9b4c6a86e9b2cf22b9f7d337455',
  'filament/support' => 'v3.2.127@a720fb2508a1d84a9b35aedc9991d4b53d18fea6',
  'filament/tables' => 'v3.2.127@c287a68e084c96c3f2991eaddf1d6b5159af5147',
  'filament/widgets' => 'v3.2.127@6de1c84d71168fd1c6a5b1ae1e1b4ec5ee4b6f55',
  'firebase/php-jwt' => 'v6.10.2@30c19ed0f3264cb660ea496895cfb6ef7ee3653b',
  'fruitcake/php-cors' => 'v1.3.0@3d158f36e7875e2f040f37bc0573956240a5a38b',
  'graham-campbell/manager' => 'v5.1.0@5c9e1e4b8f9ef5fc904545c617b83efa46d1bd09',
  'graham-campbell/result-type' => 'v1.1.3@3ba905c11371512af9d9bdd27d99b782216b6945',
  'guzzlehttp/guzzle' => '7.9.2@d281ed313b989f213357e3be1a179f02196ac99b',
  'guzzlehttp/promises' => '2.0.4@f9c436286ab2892c7db7be8c8da4ef61ccf7b455',
  'guzzlehttp/psr7' => '2.7.0@a70f5c95fb43bc83f07c9c948baa0dc1829bf201',
  'guzzlehttp/uri-template' => 'v1.0.3@ecea8feef63bd4fef1f037ecb288386999ecc11c',
  'hashids/hashids' => '5.0.2@197171016b77ddf14e259e186559152eb3f8cf33',
  'irazasyed/telegram-bot-sdk' => 'v3.14.0@c72ef585556578105c4d5cc56324575ef3677fd2',
  'kirschbaum-development/eloquent-power-joins' => '4.0.1@3c1af9b86b02f1e39219849c1d2fee7cf77e8638',
  'laravel/framework' => 'v10.48.25@f132b23b13909cc22c615c01b0c5640541c3da0c',
  'laravel/horizon' => 'v5.29.4@c0a7087afd93e7707850cdc7ee3ff3f2eaebce98',
  'laravel/passport' => 'v11.10.6@2642f360c51dfde3a6ea60f86ae5d9a8c0caf3cf',
  'laravel/prompts' => 'v0.1.25@7b4029a84c37cb2725fc7f011586e2997040bc95',
  'laravel/serializable-closure' => 'v1.3.7@4f48ade902b94323ca3be7646db16209ec76be3d',
  'laravel/telescope' => 'v5.2.6@7ee46fbea8e3b01108575c8edf7377abddfe8bb9',
  'laravel/tinker' => 'v2.10.0@ba4d51eb56de7711b3a37d63aa0643e99a339ae5',
  'lcobucci/clock' => '3.3.1@db3713a61addfffd615b79bf0bc22f0ccc61b86b',
  'lcobucci/jwt' => '5.4.2@ea1ce71cbf9741e445a5914e2f67cdbb484ff712',
  'league/commonmark' => '2.5.3@b650144166dfa7703e62a22e493b853b58d874b0',
  'league/config' => 'v1.2.0@754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
  'league/csv' => '9.18.0@b02d010e4055ae992247f6ffd1e7b103ef2a0790',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '3.29.1@edc1bb7c86fab0776c3287dbd19b5fa278347319',
  'league/flysystem-local' => '3.29.0@e0e8d52ce4b2ed154148453d321e97c8e931bd27',
  'league/fractal' => '0.20.1@8b9d39b67624db9195c06f9c1ffd0355151eaf62',
  'league/mime-type-detection' => '1.16.0@2d6702ff215bf922936ccc1ad31007edc76451b9',
  'league/oauth2-server' => '8.5.4@ab7714d073844497fd222d5d0a217629089936bc',
  'league/uri' => '7.4.1@bedb6e55eff0c933668addaa7efa1e1f2c417cc4',
  'league/uri-interfaces' => '7.4.1@8d43ef5c841032c87e2de015972c06f3865ef718',
  'livewire/livewire' => 'v3.5.12@3c8d1f9d7d9098aaea663093ae168f2d5d2ae73d',
  'maennchen/zipstream-php' => '3.1.1@6187e9cc4493da94b9b63eb2315821552015fca9',
  'masterminds/html5' => '2.9.0@f5ac2c0b0a2eefca70b2ce32a5809992227e75a6',
  'monolog/monolog' => '3.8.0@32e515fdc02cdafbe4593e30a9350d486b125b67',
  'nesbot/carbon' => '2.72.5@afd46589c216118ecd48ff2b95d77596af1e57ed',
  'nette/schema' => 'v1.3.2@da801d52f0354f70a638673c4a0f04e16529431d',
  'nette/utils' => 'v4.0.5@736c567e257dbe0fcf6ce81b4d6dbe05c6899f96',
  'nikic/php-parser' => 'v4.19.4@715f4d25e225bc47b293a8b997fe6ce99bf987d2',
  'nunomaduro/termwind' => 'v1.17.0@5369ef84d8142c1d87e4ec278711d4ece3cbf301',
  'nyholm/psr7' => '1.8.2@a71f2b11690f4b24d099d6b16690a90ae14fc6f3',
  'openspout/openspout' => 'v4.28.0@3e9ef74f13ba5e887e4afc7a4e0110e63559e902',
  'paragonie/constant_time_encoding' => 'v3.0.0@df1e7fde177501eee2037dd159cf04f5f301a512',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phpoption/phpoption' => '1.9.3@e3fac8b24f56113f7cb96af14958c0dd16330f54',
  'phpseclib/phpseclib' => '3.0.42@db92f1b1987b12b13f248fe76c3a52cadb67bb98',
  'prettus/l5-repository' => '2.9.1@105115badd9ee3e12d2d9368c9392f47cb5d14a8',
  'prettus/laravel-validation' => '1.6.0@d990a2cce135bcfced8db7cfff827cd9055740b2',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '2.0.2@c71ecc56dfe541dbd90c5360474fbc405f8d5963',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.3@bb5906edc1c324c9a05aa0873d40117941e5fa90',
  'psr/http-factory' => '1.1.0@2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
  'psr/http-message' => '2.0@402d35bcb92c70c026d1a6a9883f06b2ead23d71',
  'psr/log' => '3.0.2@f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
  'psr/simple-cache' => '3.0.0@764e0b3939f5ca87cb904f570ef9be2d78a07865',
  'psy/psysh' => 'v0.12.5@36a03ff27986682c22985e56aabaf840dd173cb5',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '2.0.0@a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
  'ramsey/uuid' => '4.7.6@91039bc1faa45ba123c4328958e620d382ec7088',
  'ryangjchandler/blade-capture-directive' => 'v1.0.0@cb6f58663d97f17bece176295240b740835e14f1',
  'spatie/color' => '1.6.1@4c540ffbef68a3df3d209718ae06deaab081e708',
  'spatie/fractalistic' => '2.9.5@6f12686a03d035f4558d166989c62aa93bde2151',
  'spatie/image' => '3.7.4@d72d1ae07f91a3c1230e064acd4fd8c334ab237b',
  'spatie/image-optimizer' => '1.8.0@4fd22035e81d98fffced65a8c20d9ec4daa9671c',
  'spatie/invade' => '2.1.0@b920f6411d21df4e8610a138e2e87ae4957d7f63',
  'spatie/laravel-fractal' => '6.2.1@0a30630d2ab49590af118172c03c99c0d838dab1',
  'spatie/laravel-medialibrary' => '11.10.1@33c8406b9274af743f78057ae72065ef40a72073',
  'spatie/laravel-package-tools' => '1.16.6@1f26942dc1e5c49eacfced34fdbc29ed234bd7b3',
  'spatie/laravel-permission' => '5.11.1@7090824cca57e693b880ce3aaf7ef78362e28bbd',
  'spatie/temporary-directory' => '2.2.1@76949fa18f8e1a7f663fd2eaa1d00e0bcea0752a',
  'symfony/console' => 'v6.4.15@f1fc6f47283e27336e7cebb9e8946c8de7bff9bd',
  'symfony/css-selector' => 'v7.2.0@601a5ce9aaad7bf10797e3663faefce9e26c24e2',
  'symfony/deprecation-contracts' => 'v3.5.1@74c71c939a79f7d5bf3c1ce9f5ea37ba0114c6f6',
  'symfony/error-handler' => 'v6.4.14@9e024324511eeb00983ee76b9aedc3e6ecd993d9',
  'symfony/event-dispatcher' => 'v7.2.0@910c5db85a5356d0fea57680defec4e99eb9c8c1',
  'symfony/event-dispatcher-contracts' => 'v3.5.1@7642f5e970b672283b7823222ae8ef8bbc160b9f',
  'symfony/finder' => 'v6.4.13@daea9eca0b08d0ed1dc9ab702a46128fd1be4958',
  'symfony/html-sanitizer' => 'v7.2.0@1d23de45af5e8508441ff5f82bb493e83cdcbba4',
  'symfony/http-foundation' => 'v6.4.16@431771b7a6f662f1575b3cfc8fd7617aa9864d57',
  'symfony/http-kernel' => 'v6.4.16@8838b5b21d807923b893ccbfc2cbeda0f1bc00f0',
  'symfony/mailer' => 'v6.4.13@c2f7e0d8d7ac8fe25faccf5d8cac462805db2663',
  'symfony/mime' => 'v6.4.13@1de1cf14d99b12c7ebbb850491ec6ae3ed468855',
  'symfony/polyfill-ctype' => 'v1.31.0@a3cc8b044a6ea513310cbd48ef7333b384945638',
  'symfony/polyfill-intl-grapheme' => 'v1.31.0@b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
  'symfony/polyfill-intl-idn' => 'v1.31.0@c36586dcf89a12315939e00ec9b4474adcb1d773',
  'symfony/polyfill-intl-normalizer' => 'v1.31.0@3833d7255cc303546435cb650316bff708a1c75c',
  'symfony/polyfill-mbstring' => 'v1.31.0@85181ba99b2345b0ef10ce42ecac37612d9fd341',
  'symfony/polyfill-php80' => 'v1.31.0@60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
  'symfony/polyfill-php83' => 'v1.31.0@2fb86d65e2d424369ad2905e83b236a8805ba491',
  'symfony/polyfill-uuid' => 'v1.31.0@21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
  'symfony/process' => 'v6.4.15@3cb242f059c14ae08591c5c4087d1fe443564392',
  'symfony/psr-http-message-bridge' => 'v2.3.1@581ca6067eb62640de5ff08ee1ba6850a0ee472e',
  'symfony/routing' => 'v6.4.16@91e02e606b4b705c2f4fb42f7e7708b7923a3220',
  'symfony/service-contracts' => 'v3.5.1@e53260aabf78fb3d63f8d79d69ece59f80d5eda0',
  'symfony/string' => 'v7.2.0@446e0d146f991dde3e73f45f2c97a9faad773c82',
  'symfony/translation' => 'v6.4.13@bee9bfabfa8b4045a66bf82520e492cddbaffa66',
  'symfony/translation-contracts' => 'v3.5.1@4667ff3bd513750603a09c8dedbea942487fb07c',
  'symfony/uid' => 'v6.4.13@18eb207f0436a993fffbdd811b5b8fa35fa5e007',
  'symfony/var-dumper' => 'v6.4.15@38254d5a5ac2e61f2b52f9caf54e7aa3c9d36b80',
  'tijsverkoyen/css-to-inline-styles' => 'v2.2.7@83ee6f38df0a63106a9e4536e3060458b74ccedb',
  'vinkla/hashids' => '11.0.0@5fbdbf21c432a877c281f396dc65da39a910aed2',
  'vlucas/phpdotenv' => 'v5.6.1@a59a13791077fe3d44f90e7133eb68e7d22eaff2',
  'voku/portable-ascii' => '2.0.3@b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'wikimedia/composer-merge-plugin' => 'v2.1.0@a03d426c8e9fb2c9c569d9deeb31a083292788bc',
  'amphp/amp' => 'v2.6.4@ded3d9be08f526089eb7ee8d9f16a9768f9dec2d',
  'amphp/byte-stream' => 'v1.8.2@4f0e968ba3798a423730f567b1b50d3441c16ddc',
  'barryvdh/laravel-debugbar' => 'v3.14.9@2e805a6bd4e1aa83774316bb062703c65d0691ef',
  'barryvdh/laravel-ide-helper' => 'v2.15.1@77831852bb7bc54f287246d32eb91274eaf87f8b',
  'barryvdh/reflection-docblock' => 'v2.1.3@c6fad15f7c878be21650c51e1f841bca7e49752e',
  'clue/ndjson-react' => 'v1.3.0@392dc165fce93b5bb5c637b67e59619223c931b0',
  'composer/class-map-generator' => '1.5.0@4b0a223cf5be7c9ee7e0ef1bc7db42b4a97c9915',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/pcre' => '3.3.2@b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
  'composer/xdebug-handler' => '3.0.5@6c1925561632e83d60a44492e0b344cf48ab85ef',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'evenement/evenement' => 'v3.0.2@0a16b0d71ab13284339abb99d9d2bd813640efbc',
  'fakerphp/faker' => 'v1.24.1@e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
  'felixfbecker/advanced-json-rpc' => 'v3.2.1@b5f37dbff9a8ad360ca341f3240dc1c168b45447',
  'felixfbecker/language-server-protocol' => 'v1.5.3@a9e113dbc7d849e35b8776da39edaf4313b7b6c9',
  'fidry/cpu-core-counter' => '1.2.0@8520451a140d3f46ac33042715115e290cf5785f',
  'filp/whoops' => '2.16.0@befcdc0e5dce67252aa6322d82424be928214fa2',
  'friendsofphp/php-cs-fixer' => 'v3.65.0@79d4f3e77b250a7d8043d76c6af8f0695e8a469f',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'jetbrains/phpstorm-attributes' => '1.2@64de815a4509c29e00d5e3474087fd24c171afc2',
  'maximebf/debugbar' => 'v1.23.3@687400043d77943ef95e8417cb44e1673ee57844',
  'mockery/mockery' => '1.6.12@1f4efdd7d3beafe9807b08156dfcb176d18f1699',
  'myclabs/deep-copy' => '1.12.1@123267b2c49fbf30d78a7b2d333f6be754b94845',
  'netresearch/jsonmapper' => 'v4.5.0@8e76efb98ee8b6afc54687045e1b8dba55ac76e5',
  'nunomaduro/collision' => 'v7.11.0@994ea93df5d4132f69d3f1bd74730509df6e8a05',
  'orchestra/testbench-core' => 'v8.29.0@55cf0234f9f96590bca4ece7081cc5c328e34e48',
  'pdepend/pdepend' => '2.16.2@f942b208dc2a0868454d01b29f0c75bbcfc6ed58',
  'phar-io/manifest' => '2.0.4@54750ef60c58e43759730615a392c31c80e23176',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'php-standard-library/psalm-plugin' => '2.3.0@bf6d560ae498966150bc66a42e02744b0ee242c5',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.6.0@f3558a4c23426d12bffeaab463f8a8d8b681193c',
  'phpdocumentor/type-resolver' => '1.10.0@679e3ce485b99e84c775d28e2e96fade9a7fb50a',
  'phpmd/phpmd' => '2.15.0@74a1f56e33afad4128b886e334093e98e1b5e7c0',
  'phpstan/phpdoc-parser' => '2.0.0@c00d78fb6b29658347f9d37ebe104bffadf36299',
  'phpunit/php-code-coverage' => '10.1.16@7e308268858ed6baedc8704a304727d20bc07c77',
  'phpunit/php-file-iterator' => '4.1.0@a95037b6d9e608ba092da1b23931e537cadc3c3c',
  'phpunit/php-invoker' => '4.0.0@f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
  'phpunit/php-text-template' => '3.0.1@0c7b06ff49e3d5072f057eb1fa59258bf287a748',
  'phpunit/php-timer' => '6.0.0@e2a2d67966e740530f4a3343fe2e030ffdc1161d',
  'phpunit/phpunit' => '10.5.38@a86773b9e887a67bc53efa9da9ad6e3f2498c132',
  'psalm/plugin-laravel' => 'v2.11.0@ffd51399b672959331ed3ef4eaae13984474e2f0',
  'psalm/plugin-mockery' => '1.1.0@876247d15f91df08240d00dac69c5135b6689283',
  'psalm/plugin-phpunit' => '0.18.4@e4ab3096653d9eb6f6d0ea5f4461898d59ae4dbc',
  'react/cache' => 'v1.2.0@d47c472b64aa5608225f47965a484b75c7817d5b',
  'react/child-process' => 'v0.6.5@e71eb1aa55f057c7a4a0d08d06b0b0a484bead43',
  'react/dns' => 'v1.13.0@eb8ae001b5a455665c89c1df97f6fb682f8fb0f5',
  'react/event-loop' => 'v1.5.0@bbe0bd8c51ffc05ee43f1729087ed3bdf7d53354',
  'react/promise' => 'v3.2.0@8a164643313c71354582dc850b42b33fa12a4b63',
  'react/socket' => 'v1.16.0@23e4ff33ea3e160d2d1f59a0e6050e4b0fb0eac1',
  'react/stream' => 'v1.4.0@1e5b0acb8fe55143b5b426817155190eb6f5b18d',
  'roave/security-advisories' => 'dev-latest@fff26f7a91a7458bf6eea5afdd71b4aba1f1d3ea',
  'sebastian/cli-parser' => '2.0.1@c34583b87e7b7a8055bf6c450c2c77ce32a24084',
  'sebastian/code-unit' => '2.0.0@a81fee9eef0b7a76af11d121767abc44c104e503',
  'sebastian/code-unit-reverse-lookup' => '3.0.0@5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
  'sebastian/comparator' => '5.0.3@a18251eb0b7a2dcd2f7aa3d6078b18545ef0558e',
  'sebastian/complexity' => '3.2.0@68ff824baeae169ec9f2137158ee529584553799',
  'sebastian/diff' => '5.1.1@c41e007b4b62af48218231d6c2275e4c9b975b2e',
  'sebastian/environment' => '6.1.0@8074dbcd93529b357029f5cc5058fd3e43666984',
  'sebastian/exporter' => '5.1.2@955288482d97c19a372d3f31006ab3f37da47adf',
  'sebastian/global-state' => '6.0.2@987bafff24ecc4c9ac418cab1145b96dd6e9cbd9',
  'sebastian/lines-of-code' => '2.0.2@856e7f6a75a84e339195d48c556f23be2ebf75d0',
  'sebastian/object-enumerator' => '5.0.0@202d0e344a580d7f7d04b3fafce6933e59dae906',
  'sebastian/object-reflector' => '3.0.0@24ed13d98130f0e7122df55d06c5c4942a577957',
  'sebastian/recursion-context' => '5.0.0@05909fb5bc7df4c52992396d0116aed689f93712',
  'sebastian/type' => '4.0.0@462699a16464c3944eefc02ebdd77882bd3925bf',
  'sebastian/version' => '4.0.1@c51fa83a5d8f43f1402e3f32a005e6262244ef17',
  'spatie/array-to-xml' => '3.3.0@f56b220fe2db1ade4c88098d83413ebdfc3bf876',
  'spatie/backtrace' => '1.6.3@7c18db2bc667ac84e5d7c18e33f16c38ff2d8838',
  'spatie/error-solutions' => '1.1.1@ae7393122eda72eed7cc4f176d1e96ea444f2d67',
  'spatie/flare-client-php' => '1.8.0@180f8ca4c0d0d6fc51477bd8c53ce37ab5a96122',
  'spatie/ignition' => '1.15.0@e3a68e137371e1eb9edc7f78ffa733f3b98991d2',
  'spatie/laravel-ignition' => '2.8.0@3c067b75bfb50574db8f7e2c3978c65eed71126c',
  'symfony/config' => 'v7.2.0@bcd3c4adf0144dee5011bb35454728c38adec055',
  'symfony/dependency-injection' => 'v7.2.0@a475747af1a1c98272a5471abc35f3da81197c5d',
  'symfony/filesystem' => 'v7.2.0@b8dce482de9d7c9fe2891155035a7248ab5c7fdb',
  'symfony/options-resolver' => 'v7.2.0@7da8fbac9dcfef75ffc212235d76b2754ce0cf50',
  'symfony/polyfill-php81' => 'v1.31.0@4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c',
  'symfony/stopwatch' => 'v7.2.0@696f418b0d722a4225e1c3d95489d262971ca924',
  'symfony/var-exporter' => 'v7.2.0@1a6a89f95a46af0f142874c9d650a6358d13070d',
  'theseer/tokenizer' => '1.2.3@737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
  'vimeo/psalm' => '5.26.1@d747f6500b38ac4f7dfc5edbcae6e4b637d7add0',
  'apiato/apiato' => 'dev-main@2198d98686eb42b67b36fb7698b603ccf64f99b5',
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
        if (!self::composer2ApiUsable()) {
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
        if (self::composer2ApiUsable()) {
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

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
