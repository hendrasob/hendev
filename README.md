# Configuration

## `vendor directory`

You have to rename the `vendors` folder to `vendor` which is located in the `public/assets` directory.

## `env`

On the file `env` there will be some interesting things to manage the app. For more details see the following:

### Environment

If you are developing or creating apps, you can set the environment to work in development and production mode.

By default the environment is set as follows.

```bash
# CI_ENVIRONMENT = production
```

And to set it up on the development, you just need to delete the comments.

```bash
CI_ENVIRONMENT = development
```