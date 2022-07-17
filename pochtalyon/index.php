<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pochtalyon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <form action="telegram.php" method="POST">
                    <div class="form-group">
                        <label for="">Введите ваше имя</label>
                        <input type="text" class="form-control" id="" name="user_name" placeholder="Например, Павел">
                    </div>
                
                    <div class="form-group mt-3">
                        <label for="">Введите email</label>
                        <input type="email" class="form-control" id="" name="user_email" placeholder="example@mail.ru">
                    </div>
                
                    <div class="form-group mt-3">
                        <label for="">Введите номер телефона</label>
                        <input type="phone" class="form-control" id="" name="user_phone" placeholder="+7(999)-99-99-999">
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Выберите предпочтения</label>
                        <select required name="user_choice" id="">
                            <option value="Программирование">Программирование</option>
                            <option value="Дизайн">Дизайн</option>
                            <option value="Тестировщик">Тестировщик</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Отправить</button>
                </form>
            </div>
        </div>
      </div>


      <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>