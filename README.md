### Migrate database and seed user data

```bash
php artisan migrate --seed
```

### Download user pictures
Set the environment variable
```
FILESYSTEM_DRIVER=public
```


```bash
php artisan download:user-pictures
```

```
php artisan storage:link
```