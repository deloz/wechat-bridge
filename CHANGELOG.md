# Changelog

## [1.5.3](https://github.com/deloz/wechat-bridge/compare/v1.5.2...v1.5.3) (2023-12-04)


### Miscellaneous Chores

* **deps:** bump actions/checkout from 3 to 4 ([32e726e](https://github.com/deloz/wechat-bridge/commit/32e726ed883617f416d170110de552f9f5707ca7))
* **deps:** bump dependabot/fetch-metadata from 1.5.1 to 1.6.0 ([02860f2](https://github.com/deloz/wechat-bridge/commit/02860f2705dff80737f512a31498cf7750f3f633))
* **deps:** bump google-github-actions/release-please-action ([b379d52](https://github.com/deloz/wechat-bridge/commit/b379d5299d09ed5d0ff3c5df9feaa6944f6bcee1))
* **deps:** bump stefanzweifel/git-auto-commit-action from 4 to 5 ([b1d4b99](https://github.com/deloz/wechat-bridge/commit/b1d4b99da16b9b5a8ce8c5e6fce56a0c3a22eeb1))

## v1.5.2 - 2023-06-19

### [1.5.2](https://github.com/deloz/wechat-bridge/compare/v1.5.1...v1.5.2) (2023-06-19)

#### Bug Fixes

- **MiniProgram:** fix bug in sendRequestPost method for UrlLink class ([e6f48d0](https://github.com/deloz/wechat-bridge/commit/e6f48d031b2d62a986100c585dfc5680ec59cc67))

## [1.5.2](https://github.com/deloz/wechat-bridge/compare/v1.5.1...v1.5.2) (2023-06-19)

### Bug Fixes

- **MiniProgram:** fix bug in sendRequestPost method for UrlLink class ([e6f48d0](https://github.com/deloz/wechat-bridge/commit/e6f48d031b2d62a986100c585dfc5680ec59cc67))

## v1.5.1 - 2023-06-19

### [1.5.1](https://github.com/deloz/wechat-bridge/compare/v1.5.0...v1.5.1) (2023-06-19)

#### Code Refactoring

- **UrlLink:** modify query method to accept and return values ([a6e4764](https://github.com/deloz/wechat-bridge/commit/a6e4764ac07edf8aceac62f88ab99400b29df747))

## [1.5.1](https://github.com/deloz/wechat-bridge/compare/v1.5.0...v1.5.1) (2023-06-19)

### Code Refactoring

- **UrlLink:** modify query method to accept and return values ([a6e4764](https://github.com/deloz/wechat-bridge/commit/a6e4764ac07edf8aceac62f88ab99400b29df747))

## v1.5.0 - 2023-06-15

### [1.5.0](https://github.com/deloz/wechat-bridge/compare/v1.4.0...v1.5.0) (2023-06-15)

#### Features

- **UrlLink:** add method to generate URL link ([0477fd9](https://github.com/deloz/wechat-bridge/commit/0477fd93a7e8aebd5083cf45c20d83258191a08f))

## [1.5.0](https://github.com/deloz/wechat-bridge/compare/v1.4.0...v1.5.0) (2023-06-15)

### Features

- **UrlLink:** add method to generate URL link ([0477fd9](https://github.com/deloz/wechat-bridge/commit/0477fd93a7e8aebd5083cf45c20d83258191a08f))

## v1.4.0 - 2023-06-02

### [1.4.0](https://github.com/deloz/wechat-bridge/compare/v1.3.0...v1.4.0) (2023-06-02)

#### Features

- add payment notification handlers and serve method to Payment Application class ([f2c748c](https://github.com/deloz/wechat-bridge/commit/f2c748c483613da2dcfe8143c184857205cad77d))

## [1.4.0](https://github.com/deloz/wechat-bridge/compare/v1.3.0...v1.4.0) (2023-06-02)

### Features

- add payment notification handlers and serve method to Payment Application class ([f2c748c](https://github.com/deloz/wechat-bridge/commit/f2c748c483613da2dcfe8143c184857205cad77d))

## v1.3.0 - 2023-06-02

### [1.3.0](https://github.com/deloz/wechat-bridge/compare/v1.2.1...v1.3.0) (2023-06-02)

#### Features

- add GetApplication trait to MiniProgram and Payment applicationsThis commit adds the GetApplication trait to the MiniProgram and Payment applications, allowing access to the EasyWeChat application instance ([c73d8fd](https://github.com/deloz/wechat-bridge/commit/c73d8fd8c213d912bc019fa5c8faffe1586c8a9f))

## [1.3.0](https://github.com/deloz/wechat-bridge/compare/v1.2.1...v1.3.0) (2023-06-02)

### Features

- add GetApplication trait to MiniProgram and Payment applicationsThis commit adds the GetApplication trait to the MiniProgram and Payment applications, allowing access to the EasyWeChat application instance ([c73d8fd](https://github.com/deloz/wechat-bridge/commit/c73d8fd8c213d912bc019fa5c8faffe1586c8a9f))

## v1.2.1 - 2023-06-02

### [1.2.1](https://github.com/deloz/wechat-bridge/compare/v1.2.0...v1.2.1) (2023-06-02)

#### Code Refactoring

- Remove unused Payload dependency from Payment Application constructor and getPayment method ([7872c72](https://github.com/deloz/wechat-bridge/commit/7872c72716c8e626022ff158127ea6922db7afbf))

## [1.2.1](https://github.com/deloz/wechat-bridge/compare/v1.2.0...v1.2.1) (2023-06-02)

### Code Refactoring

- Remove unused Payload dependency from Payment Application constructor and getPayment method ([7872c72](https://github.com/deloz/wechat-bridge/commit/7872c72716c8e626022ff158127ea6922db7afbf))

## v1.2.0 - 2023-05-24

### [1.2.0](https://github.com/deloz/wechat-bridge/compare/v1.1.0...v1.2.0) (2023-05-24)

#### Features

- Add new payment method to Wechat Bridge ([6b67f8a](https://github.com/deloz/wechat-bridge/commit/6b67f8aad5921c5ad3bb7d0ee8f6e16f06def7fb))

## [1.2.0](https://github.com/deloz/wechat-bridge/compare/v1.1.0...v1.2.0) (2023-05-24)

### Features

- Add new payment method to Wechat Bridge ([6b67f8a](https://github.com/deloz/wechat-bridge/commit/6b67f8aad5921c5ad3bb7d0ee8f6e16f06def7fb))

## v1.1.0 - 2023-05-24

### [1.1.0](https://github.com/deloz/wechat-bridge/compare/v1.0.0...v1.1.0) (2023-05-24)

#### Features

- add GitHub workflows for automerge, dependabot-auto-merge, readme-contributors, release, and update changelog ([f9e77be](https://github.com/deloz/wechat-bridge/commit/f9e77be6dadadef101b9882bc3d751a511d6d157))
- **Payment:** add Payment Application class for Wechat bridge with caching support ([01da68c](https://github.com/deloz/wechat-bridge/commit/01da68c51db14fa6df46a9b3eeb38081d6642506))

## [1.1.0](https://github.com/deloz/wechat-bridge/compare/v1.0.0...v1.1.0) (2023-05-24)

### Features

- add GitHub workflows for automerge, dependabot-auto-merge, readme-contributors, release, and update changelog ([f9e77be](https://github.com/deloz/wechat-bridge/commit/f9e77be6dadadef101b9882bc3d751a511d6d157))
- **Payment:** add Payment Application class for Wechat bridge with caching support ([01da68c](https://github.com/deloz/wechat-bridge/commit/01da68c51db14fa6df46a9b3eeb38081d6642506))
