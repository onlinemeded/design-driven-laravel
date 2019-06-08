# Contributing

Contributions are **welcome** and will be fully **credited**.

We accept contributions via Pull Requests on [Github](https://github.com/onlinemeded/domain-driven-laravel).

## Procedure

Being an ongoing contributor to an open source project requires just a
bit of planning to get your representation of the project setup properly
and to understand the workflow necessary to keep things in order.

### Setup

1) Fork the primary repository to your account via the Fork button [here](https://github.com/onlinemeded/domain-driven-laravel)
2) Clone **your** instance of the repository down to your local environment
3) Within your local, add an upstream remote to reference the primary repository: `git remote add upstream git@github.com:onlinemeded/domain-driven-laravel.git`
4) Make sure you don't commit to `master` within your local. That should remain kept up-to-date via `git pull upstream master`. 

### Contributing

1) Run `git pull upstream master` to ensure your local `master` is current
2) Run `git checkout -b feature/my-super-cool-new-feature`
3) Create your awesomeness making sure to `git commit` your work along the way 
4) When you're all set, you can `git push` from your local to create a remote branch within your account
5) Head to your account and create a PR to the primary repository
6) We have StyleCI, TravisCI, and CodeClimate setup just to make sure this project stays beautiful, watch for any flags that these guys throw. You just might have a touch more work to do :)
7) Once the above give the all clear, we may discuss your work with you but you will likely be sitting pretty at this point   

## Pull Requests

- **[PSR-2 Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)** - The easiest way to apply the conventions is to install [PHP Code Sniffer](https://pear.php.net/package/PHP_CodeSniffer). With that installed (and executables `phpcs` and `phpcbf` in your `PATH`) we have some convenience commands for you to run: `composer check-style` and `composer fix-style`.

- **Add tests!** - Your patch won't be accepted if it doesn't have tests. You can run `composer test` to ensure your new stuff doesn't break old stuff. You can also run `composer test-coverage` to generate an HTML representation of the code coverage in the project. That'll drop an entry point here `./coverage/index.html` for your convenience.

- **Document any change in behaviour** - Make sure the `README.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0](https://semver.org/). Randomly breaking public APIs is not an option.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please [squash them](https://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) before submitting.

**Happy coding**!
