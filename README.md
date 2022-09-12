# using-rabbitmq
## Testing RabbitMq and implementing POO

### Sumary

1. Documentation
2. How to Test on Your Machine

### Documentation
To see the full documentation, please access the following link [Doc](https://www.google.com/).

### How to Test on Your Machine

- Install Docker locally [Docker site](https://docs.docker.com/desktop/).
- Clone this repository.
- Run command `docker run -it --rm --name rabbitmq -p 5672:5672 -p 15672:15672 rabbitmq:3.10-management` in your terminal.
- Run command `php ReceiverService.php` in Services folder, on one terminal.
- Run command `php SenderService.php` in Services folder and, on other terminal and go see the ReceiverService terminal.

