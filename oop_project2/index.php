<?php

require 'vendor/autoload.php';
use users\user;
use users\Admin;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();
$User = [
    new user(
        'Ivan',
        'Ivanovich',
        'test@example.com',
        'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMQEBUREBMVFhAVFRUWGBUXDxUVFxkXFRUYFhgVFRcaHigiGB4mGxUXIjEhJikrLi4uFx8zODMtNygtLisBCgoKDQ0OFxAQFS0fFh0tLS0rKystKy0tLS0tLS0tLS0tLSstLS0tLS0rKy0rLTgtKzgtKy0tNzctLS0rKzcrK//AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQYHAwQFAgj/xABHEAABAwIDBAYGBwUHAwUAAAABAAIRAwQSITEFBkFRBxMiYXGBFDKRobHBI0JSYnLR8DNDgrLhFlSDkpPC0kRT8Rc0ZJSi/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAEDAgT/xAAeEQEBAQEAAgMBAQAAAAAAAAAAARECEiEDMVFBE//aAAwDAQACEQMRAD8Atlq0t4LEXFpXon95SqN8y0x71vgL0FEVX0bXOO1pYtQCwjvbmpRcWUZt9ih+6TfR7u8tzl1V08j8LziHucFYTQojm7H2h6IcLpNrJ5k0TrLR/wBvmPq6jLITEOBAIIIOYIMgg8QeKjNe0+s3XktfZl8bMwZNqSZHGjOrmjjT5t+rqMslRL0wkxwIBaQWkAggyCDmCDxTCKE4TARCACaITQJNCEAhNJUCEIQCEIQCRTQg8poQgSS9IhB5SXpEIPKE0kAkU0FAkk0KBQhNCo1wva8gL0oKs23T6jb9QaNubenUHe5ktP8AKFN7d0tB5hRTpSp9VebPuuGOpQcfxgOb/K5SXZjppjukKJW80LDcW05tyKztWRoQcvZ9061MRNuT2mAZ0ydXsHFvNnDUcjKaTw4BzSC0iQQZBB0IPFcetQxZjVYLCubd0QTRJksiS0nV7By5t8xnINEiQlTeHAFpBBEggyCDxC9IoQmhAIRCIVCQnCIQATQhAIQhAiEl6Qg8oXmtVaz1jCVOs12hHtQe0l6hJAkIQgSITSQJBTSKBITKSAQhCDCEwkvQCghPTBaY9lvqD1qFSlWH8LwD7nFZt27jrKQcNHNa7/M1SHeKwFxaV6B/eUqjfa0x71X/AEY3hqWlLF6wa6mfFhRKnTFlCxMWUKD20JVqWLxTasgVGpaVTRcRH0ZMlvInVzfmOPjr2qbw4AtMgiQe4rQfSDtVt2Z7A7svZ/RBnQhEIpoQhUCE0IEhNCBITWntapVbSc63DXVRmGumDzGXGEo20KHbO3xql2CvQDXAwYeWn/K781vbS3ztrcA1CQ4iQ0QSuP8ATn9deF/GPeq+wVGU88xPyXEr3GCCDDvHNaG39vC5bRumtLWuBETnk+Jy8PeuHt/bGCCCBIB14cDmZXk+SXrq49PxZJ7WxsLagrUhiIxjI9/euoqy3Tql9vjcQWvJ4ZhwP9fepPZbRdSZLiSwa8SO7wW3Hy/zpl38f3YksIWhZbUZUzB8M/jyW8DK3l1iEJpKgSKaRQIpJlJAIQhBhC9hIL0FABVFue30a9vbU/urpzh+Gp2hHkQrdhVXvBS9H3hJ+rdWzXfx05afc0e1Cp41ZWrXt3S0HmAthqiMjVkCxtWQKjIFltDm4eB/XsWIL1RyeO8EfNBuJpL0qpJoQgEIQgEIQgEimhBGN8qFNlB1RwGIaHj5H5Kr6eyH3DuPWYpnUwcso00U46RbwY2UjpB48TodZkKJDaz6TQ2kMLgC2c8UDv8A1ovJ3669Nufr2395KXVNp0Gfs6bI0jTUyeZJUH2pX6ynjhwqtEgEd0GeY4jx7l3GX9zWqNa4ugE6uLsiMwZ8fcupW2QGHER1juA4NzJMeUJrpi3H2kX0KVLCWntZlpicXzyhTG2kteHZzKj2xK78YBHZ74BHhCllJwJkcVx1N9muBfsfSZjpvwgcDOueg4lSrdbaLq1OHAhwAnOVF9p12EuY6S6Y7MmJ45aL3sa+ZYulxcKJBLnOGYjuyWnx9WVx1NWLCFHv7Z2mEOFWZ4QZ9i4O0ekkB5bb0C77z3YR5BenYzxP4SKqO46Q7sugdW3WAKbneZzlZ7XpCuqWVekHk6Z9WPgVPKC04QohsTfylWOGvFF2gmcJ/iUtZUDhIMg8RorqGhCFRjavSTV6UAq36W6XV1tn3Y+pXdScfu1RInzaVZCh/S1Y9dsmuR61LDWH+G4E+6UG9st00wORI+fzW81R/dG862gx/wBumx/tbn71IGojI1ZAsbVkCDI1BMQeRBSam8ZIN4L0sVB0tB7llVUIQhAIQhAIQhAIQhBX2+9j1lw90xFJkZTm52EO8pXEttmMxuL4DZgcRA+1yKme+VgXPoVhkGuwOjk7Se7VU1YuFO7e2u5zqIbWOF1RxkDGDInmG5/eXm7521rzUr2jvJYUmOFOrTdVBgjFE56ady5N1tgAY2EYTnJfMDlhGufHJc3d7Z1DA+rVZTaAZGJgAAdnEnUwtNlS0bWIoUesOZxY5aPwjhmuPGOkp3c2g2s+AH4gC7MEAn5qVWtV7WvfUceMNHAeWZK4O5lm40+scACSSTJLgOUnguhdVcDalaq6KYGTAdfvE6k9yhXEt74m5L3w1rQSc8h+LhPDmV52rUdfEw76FkafWdwGY/XeuNsu5Nw8EQGZucJmGyZ0EZ8z5Lr3VYNZ1bI601gSeAOpE8YEexdfSNPqSIp4cL8/WkSO7vz0lN9xTacFQdoa/wBOS6u27WH06jsMCJPHPTitS8s3PqAkfRRnkAZkTxPuVSufUwvILHAEGcWeoM5zPNb9u1r2gujIciZnzzPFDraiHBzDkez6pP64rzZ2QFTPJp0JOvgXSAPBdOceKdAGcYkNnCMQynSY114LqbI3gq2lUBriaJ1ZMjyJ9XwWCA2oWuMZSBMTx0j3nlwWnc2zC4Fgh2pEmDnORn9QrKmLRob4WjmgmphJ1a4Q4dxCSq59AEy57QeIluSF35mLvATSCa7cha+0bQVqNSi7SoxzD/E0j5rYTCCp+iq5PozaT/XpPqUXdxa5WE1VzsVnou19oW+jetbcNHMVQHGPNysZqIyNWQLG1ZAgyNXpeGr2gz2hyI5H45rOtW2PaI5j4LaRTQhCoEIQgEIQgEIQg4W+N82jbEv4nId4BPyVNbRrPqsFHJ+Nzq3ZEuYKjvVcWjQOPz4K6N7N26O0rfqK5e0Yg5rqb8LmuAIkag5E5EQoY/cyvbNaGHrGsAaMDYMNHZJaNTkM81h8nN3Y15sxFdl7vNNIdc4FmKcPAmOOeZW9e2QpNwsa0YiBAYB4DKJUjobEqvIJY6WmQCIBJ+sZ45kFcveW3dRextQQ6Q4QeR96z8b/AE8o2mObQohmkDSdefioNvLtA1oaJwOIhuIyR3gahbe1bxxMOfE5Znh3frguJUu6bRgpNLnwe2Z1zkEnQ/krIOpu5XY01cPqtYABlEg6cz4LsbJsgalNwBgYnHkMRzJPOI9ij+xKLm0cLiBLy4nDqwcCeOcQpba3+B3ZBjUuc3no0TmlHG21VLq5bBDDlEScuLcY+C83FlUEFjiWiZl4JjlH6C23iq8l/VQ3FqWAZc4meS490xuI4KpJGrQTrwnIxCsR1bRrXh1OBiGgiJOo1W7WoHqmvAc57CMhGo4zmY/UKGtuTSMgO7J4AjPzzUopXdRwbVYYa8Q9s6ZccxHmisVeviqdYQ0ADMkgGTyJ1Pdl5r1s4mrVkARnxOZPEjSfHknUuB2QAJkgGRAHMZ6LZ2bcNIfUaDA0MmCR6xk5RpmiHXojEZqAHljaPdkhaLGCoMZYw4pMlwJOfcYSVF3BNCAt2YTCEwgq/fil1G3LWv8AVuaLqLj95hls+0KZ2b5Y093wUa6aKGG0oXbfWtrmm7+F/ZPvhdzY1YOZlpqPBwlCukFkasYXtqIytXtY2rIEDaYc098e3Jby57xkt9rpE80U0IQqBCEIBCEIBCEIBKE0IFC4+8uyG3NIggFzc2nj4Lsry8SFLBRe0dlMc7C8SRPvQ6ybTaMIA4H+qm28mw8DjUa2W/BRl1LEDHrcMsh3rzWWNJXOvR6rCcIc7ICRkBplz716tLYPp46pOAOn1Y9v9V69EJcHTLgeXt+JWTbAc5oZ9WRpr58IUVzrQl76g60sB4BhHZHIjVeLm8o0g5lFhqVDqXNJz7iYB9616O2a0mna0aeRADjiM+zOcv1C6jdm3lZoL3UWzxh7u/gR/RdfQ40VHOl9ENBnPrGt93MeK3tmHDLQQRMAkw3FJ0HALILWyYYqXJfWH2XOc0EDlm39eaz2tkHEGmcZxZENIjniBdPxVQrtzT1bROPEc2u0yk5CDwTAFUPoxFBgku0idMufivFz1gLmluEkwCXAcQZ7MESJHiRotai/H2GjDbDiSWl+emuXFB3bK+psptawjCBAkEHzyQuK68zyo5cJABQir4QEIC3ZGvTV5TCDh797N9K2bc0R6zqLy38TRib7wFFOjnaHXWdF060g0+LOz8lZBEiDoqi3BZ6NVubQ/uLp7QPuPPZQqxmLIFha4DU+9P0hv2h8URshe2lafpjeZPkmL0cAUG6tm0d2Y5ZLlemHkFubNqzIPj8kG+hCFVCEJSgaF5xBOUDQudtfazbdumJ50aD73H6o71Bdt9IWHIVA0/ZpAPd5vcIHkiasd9ZrfWcB4uAXhl7TOlRh8Ht/NUHX3ypuecQDeJc/HWefIQPesVvvIH1HDr6dNoIwl9BzZ9hMIa+hwmqr2bf3tBoq0ajK9Iiew7ECO5p18lNN2t6Kd4MPq1Rq2dY1j8kNc/f7azaNNrO1icfqiSAMyfgoW7aDHMD9JnhGQ5rY6VK7n3LWNc7C1uYblnJJJPE6ZKG2zKk+sS1x0IEgH+iw6vtpEnZWGq816s/BS/d3dSG46ozcPV4QfnC93e5THEFpLeMahPGmoJbUwwYWsy5AeawXF0W/R1rhtKmZd1dPtVSHEyDkcvZnKl95u6aDS974YBmYz8u9cPZ+z21ifRxTptgDEaPWVDllic4yP/C4vpZ7PZd7s2mOrptDXAfWoy4zxMDU6rotp9W17gJEdgDQjiYSs902T1lSsS77ga0ZcwBJPmsW23to02Uw6WzzzPIHlqkWuU6g6qJ1BOhEGQQQMu9DNlOaASO1qACYb+pW2buA0NGpAjzSdeYnYS4kdrsgQImNfP8AUKo1nWgJlzKeLjjcA7wORQvL6lKc30+HrEk6cUILnBTWMFepXoZvcpheEwUHsKrNsUvRtv1ODLqg1473syPw96tHEq86VafV1bK8H7ut1bj9yprPsQbzSszStYvDRLiA0cSYHtWjX3goM0cXnkxuL/8ARhvvRy7jCs7CobX3oqH9nTawc3EvPsEAe0rQq3Na4MPe944tmGx3saI8yEVNLzb1ClIdUDnDVrO24HkQ31fOFitN8Ggy2k7FpDnN8pifYokaLKQHXPa3LJjc6hjLssEl3DJoOq6uzdn1agmnTFKmZ7VZrS8jPSk0yB+JzTnoFNEjZvLcgF9RtGmzm8Pb4CZW/s/b1arn1TQz7Zc5s/haRi8yAOUqPnZ9vZDrq7jinJ9SC6YPZpMAgGJ7LBJ70MfcXfqA0KGfadArvHAtGlIEcTLs9GkK6JPU2+MfVNZjq8Wtd6o5vMdnw1PJcu/q9WDUqloE83Ekng1obLj3DNalR9KxpZjCJyDRie9x97nHmfMgLDs+2q1XivcZOHqUtcAPEkfW5oOo2iSARx74PmDotCu6q+kX2zceZEdY1kgcWudw0zWHeK7c1gojOpVkCCZDB6xz8Q0Hm8HgV0LRhpU2skEAQcoz4++UEW2o402zcB1Wr/dmnDSaYkdaZ+k14yO5V3t4Xtw8vdSLW6NbTpBrABoBGviVbNjU6y6r5gNjjmDGFvD8JWzd2QeC3FSAOWdOPYcldcqFsdlvquwiBnnJAgqSWW6LJ+kqt8jK39vbBl5qtaey6KrWugkTGJp79J7wpBs3c+k5jalC5rYCMpDT5EQII5KjV2Vs/wBEZgo1QWul5BdDWAZFx5TK1a971Nw2oCTUMH6M695HdzC6+8tv6JZPDnmoXFsfRGTEmMp5DNVZebXxvBLjHaABa4EA8fEHjynms+t13ziUbRvTWealQ5k/bPPiPP3KSdH1q24u2tcJDQXEcOyYz7pVSU7t9Uim3tOOnaa2YOWZgK+eiXYHolDrq5PpNWQRiDmtYD2WtLcpIAJXE497XfkscNhOFrXF21okqJb6bxV6TabLQYjUxCWwTIExPDKVpbkcn0i3R6tlNjG1AS7E2RMAcPJV5abu0y6etqNEkBocBGfqlwmRmI7ius+3r+jDHIrNJc5xcSO1mcwM9F42U6qS04TrqX1MsgYECAF5uurbca8z029nbpsY8Pp1HtdIJJdMwcs4nyyXJ3w2q1tbC0CRr3e/Ia8FNeuwUi7QwRIz8yeHjkqprMfe3DmtBEHtPL5ED62eg81eUrJa7QntYtDkPNZ7u6cG4w5xGKCBzIW1Q3RIJJc4tA1gAeI5jvWKjsg1WkUqmJs8NDB5nUZe5NhjXF84ZAAj8M+WnDRC9P2M5pg6+B+WSFdiL8CcrwmvQzesSMS8oQesSjPSTY9fsyu2JLGioPFhxZeQKkixXVEVGOY7RzXNPmI+aD5Xudpuc8OrPqVCPtVCQ3hLQSuzRrDAHNe6YmRVPwWjtCxZbPqda0ucx7m4TpIMfJco3lRzy+m0NblIiG/+fBBJje1WkNFVxJnKQYgxmDpPCeCxX905oNSs1r4Edqmxx8AVyau2zABGKOM4R5AyfasNbarXtLHMdB5PH5LnmXPZc3069HeMNEBob2Q+WhzCOUOa6Qc10bffV7chWrDs4v8A3NbT+IuUR62iZyqCWhv1TkI/JM9SZ7TxLAz1QchGeR7l0ias3vlwqF7uuDQRUNRrnBufB7IAz5SunS39qRnVxZT2qFB2XPLCq5LKRn6Q+oGfsz3Z+5HVU/8Auj9ngzY72pgskb2y9tXsGqPtUBgDfuMbUyM5zn8I6tLpBqcW0T5VmfAOVRCg3hVZ+zwDUZxqtixYGVGuNVpaGQYfxQWf/a2KvpOGi+qRGB1aoxrQBDQ1xpmdXHMDNy6DOkE8bdh/DeNP8zQq3F0z7bf8wXoV2/aHtCCdUd4WMqms5jndYH9mm6k8sxPDgHYntnLlK23b10CO0K7f8Fvxa5yrvrG8x7kiW9yCwrbbFB9XFTLnGO0H03NkaESQJkZZSpDabEBAdSccDsxBjI844qnWkDQx4GFtUtpVGCG1qjQODazwPZKGLb2rsdxoFoc7F4lVptfYdYOIDiddQD8VrjeO4Gl1V86pPxXg7xV/7w7PnhPyQR6+2Q9pzifwj8lbXRfVBtxSdOJnHGYzM6aKt699jMuqSfAfJb2x96KlmT1L2Z6hzJ+BCir7pMA4mORII+Cjm+diRR623aOtaRlOEFs9rTjEqCUulWuPWFA/wvb/ALiszuldzhDqNI+FRw+RSzYOlX2i8sw4sBIAIwYmsgSSZIxToB+hpbU20xr6TQ1xdm4hmQLQ0mXEcgJ0zjmo/tDfRtWew1s/fn5LmVtpUrh7cTSX5tGB0OhwggZLG8NJ0s+ncOug6hSJa/BM5GJyzMQQfJQrbu6F3aUXNoUary54c51OniyGcQyZBIzy+srX3H2c1luH9TWpOgCKzmOeQBkZaBlnxAPcpOtOeMjm1Qmwbm6cwsfb3LKna1tqsmSdcu/u0W1sS02iy2ZFrcFwAljqTmxzIxRCvCEoV8ImqKud3drVHl/odUYjMekUR7usyQr1STxXyLCjCmhduRhRhTXoIPIagsC9IQQ/eLo8tb2oalQYXHUtaMzzPM95XFqdDVk7WrX8nMHsAarKQFMFZN6FbGc6twe7Gz/gs46GtnRrXnn1w/4qx0Kir63QnZn1a9dvnTd/tSpdCVmD2ri4I5fRD/YrRhEIK3b0MbP4vuD/AIrf+K2qHRBsxurKrvGuR/LCn8IhBDqPRfstv/TT+KtUd8XLZb0dbLH/AEVH/KfzUpTQQ246LtlP1tGt/BUqM+DlyrroY2a71Ovp/hrYv5wVY6EFSVegy3+pd1x+JlM/ABYT0Gs4XlT/AEW/mrhQiqbPQcOF67zoD/kstPoRZ9a8f5UwPiSreQiKupdCtr9a4uD4Fg+S2qfQzs8es+4d/jx8ArHQmCu//RrZv/yP/sn8lu2fRPsqnrbmoedSvUd7sQHuU3Qpgi7OjvZY0saHmwn4lZP7A7M/uNv/AKIUkQmCNv3D2adbG3/0Qs+z9z7C3f1lC1o03/abTg+1dyUpVV5a0DT4poJRKIEJFBQCEkIEhCEDTSQgaaSEDQEIQNCEIBOUIQNCEIBCaECQmhAkJoQJCEIBCEIBCEIBKUIQJCSEAiEIQJKUIQCEIQf/2Q==',

    ),
    new user(
        'Gina',
        'fedorovich',
        'hodor@example.com',
        'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUUExMWFRUXGBcYGRgYGBgYGBUYGB0XFxgYGBYYHSggGholGxgYITEhJSkrLy8uGh8zODMsNygtLisBCgoKDg0OGxAQGy0lHyUtLS0tLS0rLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAQgAvwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgMEAAIHAQj/xAA+EAABAgQEBQIEAwYGAgMBAAABAhEAAxIhBAUxQSJRYXGBBhMykaGxQlLBFCNi0eHwBxUzcpLxgqIkQ2MW/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgMAAQQFBv/EACkRAAICAgICAQMEAwEAAAAAAAABAhEDIRIxBEFREyIyBWFx8DNCgSP/2gAMAwEAAhEDEQA/ADfqVDhIgLLksIPZ2oKpbSBdMeY8mT5UegwfiD8RK6RXVJ6QSmIiEphSmNBsySH0itiJdoKLAeK+MlimGxnsBoGyMUpOkEcNnyhYgGBqbaxsiU0aPqNC3BMZZOeSzqGgjJxctWhEJK5bmJUSlDQmCWdi3hQ8pWOQj1hyHyhRl4yanQvDTkCzMQVK1h8c1meWKjacgMbDSE5V1lhvDmUcCvMKxlMu28OsRdHs7Bi0WJEkMbRvPRe8eImAJMC2F7IRITuIsTpKEodoHmcVFhDDIwTyw8URNC5MJVoLQey/Lh7YcRUm4QoNhDDKS0lJ3iWSwJNy9Iu2kXchw4VMJIFhEs3DuImyGQyyTYMbwVlI1XhaqjTYbxorCAFqXJG12iTF5tKSClysAuybDyYlome2lcyYMPLXdKUpdZg4RlLoKMHJ0JeYZ/7GJmSpgJSFW5gdoMYbGS5iQUKBB/u4hf8A8WMsImonpBYilR6i4+kKWW4xSdCx8xWTwcedKSdMuHkyxvi9o6koCIZ6NIA5fnitFsoc9D/WGLCzJc0AJWkK/KrhPzNo5eXwM2PpX/Bsh5WOXuilNlDaK05MGsRlc1NzLLcwHH0gZPRfcQji12h9p9FEYZy+0RlMX16WiuUxabIV5aQX7xaSm0RSUxK7RGUaKENnpVP/AMcnqYVZptDN6XxQ/Z1I/EAT840+PtiM+kWVD90o9DCuqaAXhoxSSMOptaYT8PhyZgqueUb2jnojzHFqqYCCOW4MmWSrePMZhhUXGkX8JKV7JfUkMOQhbYZQlYcJPWGYoHtoeAZlAEEX/SCWZ5nLlpQlRNVILDfzFrZKMKalNBCfiUIlpcgd4VZ2eLNpYCAfKj5i5jihMmX7hdbFw7nzBKLeirSN5+dJFkJfqf5QO/8A6H21Fc1exASP5QEx2MbQsOW8BpOFmYiZSgOfoANSSdo14/G9yFvI/Q4ek503MMQiQlNMlBrUw1bSo79o7VLy5LCq5GnTtygB/hz6fRhcMkpHFMDkw2Q666FvJL5Oe5pgU4hK5SkVP1/th8o416i9PTMJMLB5b2ULpBJZie+j6x2NWNVLmGkte/aJ8+ypBkAskiZqVOQoKuXDfyjN4s+dxXaNGeNU2cLw2Kaz3i/hc0Zvn/OI/U+QKw5Kkh5T9SUdzunkqAEud5/WNViGdKyf1ouQRQp07y1XSebPp4i9mfrNUxVpcsBnal3fq3f5GOW1ueptB/LcSALWUnmWDGpyOY1Yc1Hk0DxUu0Tk10PWDmypjVoQhSrBKSxJ5geDHkwSkKIoUot8QdgOqWcWvAbJJdYUVUkuyQVEVC6SUhwfxBj17kXJ85MgKXXUqxIJJUlnSUnsRr1Hl68bDX4op5snyQ4jESRMolhagHBa7EFtdw8W50iQwCZ4K90kWFtiNYqZHjDNWsaIqclKRwEtpyDqYPpbrEeUyUpExVd3UKjsGCtGLlQsBvdtIXLwMEt8Q15OReyz7A9z2lFlFm3CndiDytF/LZ6ZKVlTsp0aaEFttjC5ipyJMsKTMVNnqFy3CkKpSA/OkvEc/wBSTFLSaQkpYKAAZbWanmB9ICPgYY9IkvInLtjzPzFPsKLOlgKgQR94X8FNlrm8MwBWoB3AuW8RWy3M8JQpChMDhtiElRNn5AEN5gdh8FKSqoziE8TFKTVaq3dgPmeUMfiQ7QH1Bi91PuKTNJSvYC6TvrFnA4oTSpD030NiDoAp/HzgHmxnIRJnhmAcu7moMe3Y6WjfD4j9oAmJAEyyiHHGE0vY+fkLbxb8TH8FfVkT5rLUm1Yp5JDW5xDjMylKCagQyQAdTaIM0zMUIUOIlNQSzWuKqt07juIAYudUHG229rOQetoB+NjRayMLf5kh7avuwbrFHF5o5YF7m/6vC/iZzHn9t42y+SucsJQkqUSAkAOSenQBzeChGMdIptsKSpa58wIQmpRfew630A5w75BlaZCHSmsvxqDfIA7f3vFTKcq9mWQKUqLVzKgCd6U3+F9NzrvB705ggzkqIF9QQXP5gWPiFZcnpBxR03KD+5l/7RE82a1xeAuT4efdS+FNLJT9j0gjgk0oAmEPvDFFJXYHGznuKPEo9YdMFJEzCywQ/CLD7QiYgkqVyjoWTf6MsfwD7RzPBdZZM2+V/jic99Q4RiqlNN7nV+hcl45nn+AlVqAQZSyblPwHrRsD0j6DzjK69F09GcH/ANhHO/UnpczEkpFUwPYAXbW3Ntu9jpHVlHltGFS9HKMHIpVxbnUfl1qSee/gQawk+Wk/vHANrM97b3s7u/gxurKJqUmxJUksGdVuIAOQQ4B0uCGjfI8GhdyklKUux1LvUGVbYDvfcQMVJuiNo8XSiyFrQLBQPGUsogglgQ9vod40nKXMH+oln4TsXKeIFrJOpfl0hjRhkS1LVKSFqUJcspIu6bEsNak+2fJ8e4/JUBEtKQomqYopakUvTSRsON3H5do0xg0ti+RbwAQlUqVJYSkB5gJFU1ioqq0qTwqHhPNoVc7UELVLKlIlWVLTuQzoIvYUrsTzi7n+D/ZUy5iWASWWl3BCrpQL9FJtowdozLsb+3rWVp4QkOQnhQkFSk3/AA3Gg1oGjtBveigJneKBXJlSU0UJKHBesqN1G2pGvbxBFWKlYdBUiWSuXNSUzF//AGHjCwnoydosT8JLRiOMBRSgTXUokJKitSlKb4lCkJAFi5UdooSGnS1yl8VAmM2iFcZqc6AGpN9nO0UuyzSch5q00lIVJrWHsFFjLSBoA5QG6mJE4teKmUS0/CCUlkgsDcnnqnpeC3t1rSmoqkSFKUuaTdQelQSTZRBqYNpA/OZqcPMMuWpMrhQPhUoXKyaVdVUa/lJiPRA3nOYiVIKZoNTAJSlk0Es9Ru6ioKUoatq9oCZRhAqTMn+2pQSsApSaUELc2seEAXvYHlFLA5evETCqeqpAQpbFRqWp6AA27s5bSGrFmiUEykUj2khSQQEkTCPdW4ILpSG7A6PFXeyA2VmCFrI9oLKXJUouAHSAUptwNYd+jQFxmPCglJkpQQVNTuk2Z99+Wx7mJUtK1o95ITZNkhg7UpSWHIDTZ9IH4zLEFPvTLJNKSEggpYfCkfiNLdvcS5ASowibYSBC8KJswlPChLVfwu7AHdV9B1MN/p1EpAUJQFTf6i2uOJ0pCrJSTvdSrkjQQAl4cqTwAIRcJRUSyVNd7VrULk8u6RDX6MwilmhMtK1MSXYfIEMznzCJN9Bos4hdS0JSAEhgCknj2tUxIhwweGolMTcsSdL9nivicEUL/egAsGSwAG1g8XDNqlqtsIVKX3UFEeMMp0JPQQrZnmArId2MCDmOJUkICrANblERez2MM+vw6Q3BJQk32Und4eZM6hEsD8ohHw7MT1h+ljhFthGHwfymxvlP7YmJxL2VpEKcMkElgxI0+Y8x5i1FN+ABtCC9u0LGZ+qyVBKECxdSnsw1A6kdo60E26MLM9RyJUwqpCSscnLh92FlAk9dTa8JiMImUlaWZKzNUVW4SEVISCB+IodtHfZoPTZS1TFzSsNQXIuWBOoG2++8Vp8gXWslQUi51dZSuWSAbVAhJI5qjSoULskyuWmXJIIZYEoACxJpBTrqWSryOsQYvBKUusLIDKBa5VfVzYcJY8n7RrmM5aJJEpQd1LTZ3pFaAn+IVBwb2PN4r4qeylSmPEgLq/gQ1KUPqQmlXU0vBSkUaZtiESkhU8BbMhIsAX/dzKdTY3Vu5I3iP0gZITNmAUApCkIsyyVFyd3dkjlSTuTC96gw6psipKbFSlJL3aytD1Jt/KJ/QeaBSUyFJslSzqNCniD9CyrXcawpT2W0UlSVSsXOC7+2VqDH4kgGln1QFoT1ZzEvpwIpnSjM4pqJlKafw0TVgudGIRrsTa8E8+xEszlrVwoEpVQ3CqqQkdDa/IiAeExSETPfI4BKUx3KrANyZbEDp4ik6ZdaJvSK1omKw056FAK9s3KiVM6WdlBQPzIjX1pgVJnS6zVVSiygSi5UUW/CFKUxLEjtB70VgEimcVGpDJAP4VISVqI5BxT0dXgP/iNiAF+0P9SbOVMUxPwupCEtsAAPLjaJJ6J7GDCT5ftpeX7ZCUoFDkgTEpQgsB8KlB3/AIH2MYMM5WtTUuQySWEtAAWS/wCYKaBcyUtOFlEuVrl3TfioNaFFI7C38fQRZwcwqPtgcRqmUqcgATKzW1yl5YW24IAuoCK5konxeHSkqn6cZmJSHeor4WB3IKmSdAS9kmI0SJeJUFTkmhBCaAwrAHuEOW4SQkqUdS40Ft52LSpLgshBIc/iWn4lk7vUCpQ2IZywgclZmTfcIKrCkMwUpSGJA0pCaQb2doXJlpDThcslTF1q4piiTQAKUpFqiFEKKQbAlkk1cLCHn0nlPtrUooSLC9nHJktYdelmjnmUYhctSitRYKIBZgtnchRFwC4t+UtoG6BkedylJrBPM2YHqSLHvAuiwV6wtjelCQOT9IsYYAS9rxS9Q5vIWolair/bp45xTmZhRJSqWixJsYyOvqNodBfaGPcSFC+0QT5oNgkwvjOp1JLAeI1lzMTMuHEDKV9hJJF5OGWkEkgAqsHcnfbQs0OgzFICeRA+zxyPM81vw1aEDW5d3fpGYbM5kxKQFqqKgG5aX+/iNGPBDG3XsHJkc6s6hmmISuwZj8Vnfkx0d2hTxsge6EBqXIVyH9Olt7wbmfu5aUs6mFRDAF2HNnci8AsXiUSXBNS1NcL+EvaoqSadf5R0IrihD2e4+VQtNCxxAJNBVuWuAeTXdw2hEaTsYkJKVFiKSpJUzm9yQGUHJLj8LOLhsyKXLVUbAKJJIPEFML/CANB5HiLnqDJlKSWmFALDlbZQNwrbTyIjkDQtLzeWihLApUSkkXIdJSxIGujFv1EXsZNSaZqeNBSChVmKkJSCgB7EoT8PMdITMbglSFpILhSnFSHFYLE8JsNnZoek4InCKb20H4ikEik6uAoDnqHbS8J5tlsD+k8wE0qSljuQdAagGHRlfIwHkYIYHGTgsOFIRc6FShxW7kO3WNv8NQUY9bi7EKGoU51A2ux/lB31plqZk3DygLzVmpjoCUqs/R0juegivV/BBOzjGe6nErZgWYWBIoQEKsNDSfPaMwKZcyWEHi4B7euiEkFPcuA8TZ1KrGLADlKZYSLBhUCS/Kki38J6wOydCgpDA/u1EFrsKWcAjUFW9oDlvYVDl6OxqfZCkhlCqaq4JmACrfRyspHJusL2WyP2nGTcTMIUhCiArmpIeoAu5CLtzaPZS1S6FJtKKUg3cpSFlkkG7EJSPPWDXpzD04FCgLrmLnAatqEDlsH51NEcrKqirnmY0zqzYgpJQD8ASAkSrXJUQz/lQo7QXm4MVVAFlqK5jPVNZKv3Y2ZyOQFKybIAhLnBU7HlN6RMDEh3IYKJf4i4I5BzppHQs+WMNhiEJrXS6ph0RqqmXLcVqJU92FyXsIi3sgJzCfKmEFkrK0/Ck8CAqwBUm7CpWrvUpV3DQiYDSmWFcLhKQgipndQSTwjQup9bqsBCjlU9RUTLRY2qmFwX6AUg+Ceu8OWXTphFKl0KLOyArS41sRrbTdoByphUaTVBEshDMHqUSAhzcAW4yCHdvy7WM+HzI0C5bQAKpfqRp1frtFTOpbqA98qJDsQmyXsBxsq5e3Xa0SYOkoISoKq3FQH/ALWH+0AedYXPa0RDLl2GlqAKkvYfOC+YpRQgGwgL6aUSmk6hTQdznDhVKdwGhEfyY1FXCplLCkCJbBgLNEeHy4p4xsWMWZqL6QGUtHOTNeZUoEi9PI8x3gxkeH9ycNi92sbWbbe8RYHLXcqBCA5cWIPUHW3KDGRSwXJoJIAFW42I2JNjHSW2Kei/meYFLhT2akB9nuQbt21ipjZUtbO6XYvwKSVa06jfThUX1G8Vc0ublkjUvyttpb+7xpMzT25CyJj0g0kEEkb1j4gdr9I1ehR7iJ0lH7pzLP4hwVPfZKgWJ676C7F8f6kw8nDkkTFADbQAcqSwD/8AZhY9Hen/AHWnziTWeG6gANW1ZujQ65nlUvEYabISzqQpNm1/7hbTfQSoQ5vqTDTUkgT5Y+HjDjqakqKiC2hg5k59xIKUJmJYodMwXRo7K2dw0c1waFCuQvhmJUdWDsWU3mKpw07DzPclzFIOrpt831HcNGeXKLsptdHRfTmVLw2OmVJKUEEg667OOTadY2zbFg4sTFfGUCltqanHcHXzEXpH1t76ky8UkJUohKZoslRNkhSfwkmwIs/KC3qTLTIxEqaQClLsSHe7hJ8n6wpTl017D0xYx8pwqaziZSWSzkFKUknsHPdPVozIsKEzGUklXB8P4rEln3cC3MCGDE4ULC2txGgD8JJ4SeQIc9yeUDcNKqe16VMdLkkkW00PYtEemEujRUmWUFFIZQIB0BRUmYld7g0kW6KiTJpiBKXLF0KDIuRSA4PZTl/PSIc3nISkXYux1fRQ0uSxfTmeUb+l8EBLrX8CSWJLCm12tc6mM+XK4g0DMjyRasYJhSoS0gEBiajqLcm1+0FPVE1eI4EOQC54WQRepmWXvqWJP5oGZ969QHlYWWlTuDNX8J/2p/EOpbsYT1Y3ET1fvppUn8uiP+It9IbCc+O1RTa7HLCIw4VQqdKcMAgzU2I2DNvs/d4LzpQSiohFvwhQa/V7d/q0cyzLhKZaLqUdA2pBSBbXWHvC+lk+wkLdJCQ5chvGmsBkVUw4uyrj8akp9xYcu1lFNXTceO0S4ZSVEEdeF3L7MNoX8RJmYWe1dUsq5jXtsfEG0TaA5OpJF38Fkhx0+kWpUihmy2dQahv03EMGIxClMoA6QnZZiJiy4NN/DfKDuMVOB4VtYPAL20MXQXwuOplFBSoknlERxp3QYoSJ84pf3DHqfdU37yBa5EVAPEY/3V+0klKSWUBew+43bvBVSzLlueIkNyFtD3/nA303hWUpaiUqOhYp0Lkve9mbvBqfLQySmogE7ki/5r3+3zaOnj7FSehNnepylZExABf4gD+r9IE+ocwStKQma7kEpfXqdvrHQP8ALJc0UqQk9hqBo6SCG8QGm+lJcuclSUDXawHyLg+RGhxk/Yu0FMBm6JclEtiaeSaG3Ju/TfaK6vVCpKwv3BMdgw+vFfTnbtDVisuR7Y9tIKgLAuSR+Km7OYWcblklxSFIcEkConkbNbu9tIVkUltFxaZS9Q5LJzFRmYc+1iA1STau2o6/20KGOynHyyEzcOpVO7Fiz6kQ0JwqkgkEghqSlyQBu1yHYbmDmWer5klSUTgJiRveogBz8R0H98oBS+Q3FM5ti8kxK2UpC5aAQQSmgAjfe79bx2DGY8TsrlTlf6gCUr51C0ztpA7/ABG9TyjhpdIqBVUU6XANIfvCd6QzhU+WqUSSAtwmxHFc621JPmKnVa7Lil0HZsxXCU2cJDuXIIIJvuFJHziFbWSEkD4iCR5/l47wUxOEalO6WAa7FRd7agJcDbi8CpmclphILEC/XYJJ5Wba3eFTjSsiFjM5lVykhw4B+Jzp5IJfqTFv1dj/AG8vCEs8wBNuRur6AxUxUk02LGxIsX3/AF+vSF71BmJUqUhRdKeXVv6xjUeWRB0qF9KSBcFubH7xfwc9SrISVHkL/QOY6X6OxGEVIImpQSiwJ/ENh94s43P5MsH2JABGqiHI5tY6dQ366k0wOAB9I+mkylftOLICrUIJAL7KL2FtA8Gc2zwqUUIISBe9JSdWulRu3P8ASBGazFzOKYoqDtY0AqexSAWa/M63iHDYQJKeABZ3vYNr9efKE5ZoLSKPqyekypbWU7ksxB6kbtFrBqMxPEXAbcHy536xU9V4Jk8i799Omr/OKGTZqGCNDuYWl9mgb2O3p/DKqtcA/IQ04pBvbYQsen8xDgBL1EB9wIc50xNwR0h0I1G2EmUsPNFISLc4IKygMCLiKihK0Sq4hiwssplsb6GL4/dRaaoQcLZJUH13qdjvqbbQVXKrlKSKgddHfd3GwiojCmmZwmyiwZmB0003i/geJKQVJc9b+CDGzEti2AJeJABVxVJsoPboXLNtpBWRnssIBmqBVt8BIA5F/sYgzPAiUoKBpB1Fy72ck7X6Qr51gQV8LAczUlPyLOfPOHtuAukw9hvWivcUJUtSkk6E7bsKSonzE2MzMTeNKBKU10zJJUr52tbTvE/pnCJCQCoGwOqXI8lwPENeHwssljLGnc+ToIBttdlOkJ8gJnFmKFkC5shrsyVgpLXO2msV8wyY6pYgj4kg3YfiA4UnvbtD/KyoXIJDF2u55a2NydNYCZsp1AApF2HCSD1Ia7c22Z7vFUglI5/6qSn2ghwpWly7aOxf6NzfYRr6HlolK9vVbKLaN1J7QZxeAM0hnUHN6Wvq9gw0bncQtSJXs4uYBZamJN6QLs3yNoz5XVD4I6VhJYN37a9iaiGZ6Q4hdzNQXMVokDTQlrknlr007RunFrYkkEtv3582b7QuKxKzMXTq7C7vZnD7QrLkbWg1BIlxygHFiNO+oe/UbQrZrhEzQFJIt1P2AJ8dYu46coFtiPPzirk+GsSkuC+xsenK+rRmi6dlNeixkAdBSbCzdCOabu/IfrBWYRvUCdG2PJL38G9toHYLDlCmYA6HwT+E63A15wyYfDVgg6q4rAndtEh9wfuYJ5ECyvOA/AsNY1CkJBa+iQ78rmKS849glkqUNailn5km9ug/nDTg8tCNSS3kB92/rG2PkJUPgA68/pGX6ibAYtLmpxKQeB9Gv9dWiJHp6Wk3Sx6MX58oqqWqRMUybO+v67CDGVVTlpToVNTzJ3F9Yar6REgtkOWHhUGA7MbQxYmWvUXg3hPSkxKAAsG24Y/SN1ZJOT+EHtHSWOFJWK5yXoW05YXfncwxJzBkBNN7fSIl4GaNUGIyCNQR3EGsO7UiLMl2mCBgmlEM9n6FjqHcP9YoYbGkcL0l7vt053hinWKSSaWYgkEHsWBd4VZgEuaorSUh7dOz3foIdxqQfYfKQtJFzZ9NfO0B5cg1kKc2ZnBA3t1gxg8WFgMF0kXJ1byLDxFPMMPUNKTqCQH+ugh8kmtgFaSoo+AtawuB/fkRYRnM1I45iVOzAWA6FZHEo8uw5mIMFiPdNFLrH8NjuNHDN5+8EpeVhIJBAe+oSPKz05OecY5JpljRkONK0h79gb9oWvUUwe/QwSrUgm4BtoD9ftBHJsRxpSkg7UBKkpUb3c3I726wR9SZLh5stSZkogqDVJAAB1263vEUilpi+E0ywAAn9flvCrn2VFCkqJAJu3Qfw68n1hmRkTz5CZM5AlJSxQSFqU2hdT31doYs/wDScrFS0hVlJHCRY9iRsYTOPJmhZEkcyROAHJ99dgNu2g5GByZdlKOjkPpufqf5RazrKP2aeJSkqQVXSQ9MxrkODqz2MVcZQmWpSlUpFyz26MNXJFu0IyZIRfGSdjYwlJck1QFxBSqwZ9h18xfy/LVJDtwqD7XHiLGQ+mxiSFJlqQh7k2Kh2B3HOHDMMopQEp4aQwOrBmGukYsr+AeSuhSx+HDVbhmcajQaRZ9MSkrWSonh/C5dXMRphfT5WgpxM0NUCCkhinYW/nDZIyyTKlEykKAf8tTm2qTciAtVVgSYMxmISCQWD7KB+piqrG/h013cFuR/7i1icMF3LW/FLsw/iQdPoO8VU4AIFZIpG+n6BjpYxFEBIorwVdyXHU2bb/uDnonBBeJTZ0p0cOPntAGfiFKsAAPk/eHL/DVSfdPboxjVgX3ouXR1ACPYwRkahZjRoZQOwjeMiyHOlT0qY1OQbsQC/hifkBFX1Dga0Bd7att23PeJHQ7hS/oCSdyLNeNssnmpUtdkntcnbS3zjpNWgOgPl2Y0ignRmu6i5ZrD9YNEoKStRpveznokDn0sdzALPsMZSjSg+2QXILKXqyai5I3JYAcjofMmxZmpAVQAk0hPXSlIJ5m6t76EF6jK9Mtr2WsWSlxLTSFan4lnoVFwALMEgab6xvg1LqqxBAQG41aqe73u2oD8i1TQTmhBBZVZGpFwDYskaE662A1eBeZpXVYn3G4UvZB3VUdZjXKzpfRhQE1XRa2M81bXS7BmQmylmxAW1z/s+bWgxhMyUpPFTUz3IYjvy66cnhIRixKl+5VUCkhOvGdbP8MsJHdTgnlFPG5qsig/FwBZ2fhJS/Ln2b8MZ5pIiQ+pkJUqpUpNvhKW0OpGh/v5FUTUganzHPBmhTSwIDA+VG39fPKCuFz8EfE1t+Y167QtsrZH/iBgU4mQaCUzUcUtTXSoaMTz0+ccw9J+l58+b/8AKWUyUrC1J/OQd+SXTpHU8dilrRwpChuOejwLymZOSTVLFyejDl10EKnmx3tFrklSD2ERLSmlDMPts38oGZhlSJhINSgoXAJCflVaJVY4J+IpSe8As29Q/hSTYi/PnHPyNyYUbL0vAy5XFSkUuA5Ki/QA2eKuIxilqsliAxTobNdCh3/mFQIlZqS5ZyxseQLkeBcedbRArMq2AJqPwK0cn8JbRQNh35F4GMaCphpeISnimF2bjSGmDlWBZQ2dvu0B8YkqNbigmy0fCei0fhPVu4LvFOZiFTD7gJExPxDZQ0qA53ZSWu8a4XFkcUtkluJJ+FQ3sfw80nTUW+FqCSMxgpYJsrkPhPZ9LcrH7nPQeMTKxBChc76N4gEAlTqD0gE0O5Qf/wA1bj+E/XajhsUa/cd7uD+YDnyMVJSp8XTC/k+hUYoERv8AtIhW9LY8TZQv9YNFJjiR/WM8ZOE+0VPHW0EhOEbBQgYlJiVJMaI/rc06cbIsdqzmKUplElAF/wAVy/dRP984mVjSo0yyzfEeurAAHpygdhM8CiTMWLbElbc6XS7m21r6RcGOlpuhCmJLJD32/Du7Bn1blHt41WjOxhCBORSr4udgfB5v/fJIzDLpsklAJCLPMtoS3ty06XAZ3vfRIUYZU5mkEJUqlTXDjhH+4WT4cm4HW2uYicgJBcEM9rcyewuW6eRyQvoqLoT8vzVUsBTMCVJlpFwzAqVpcAjyeQBEMeWrQQUKI9wBlh9PxFBPV3LaANq8CM+yYomKmy/gQkJQnYkOEvswao899TAWRiFIIUSbCkFtVTFKK1F9aqCObUQpSa0w6voZjJK11FikaDaxSQCNN6m6KA0aKhw/EQo/iJbcuAkkne9Q+caYDMaJYTrWpZctakpQR/7q8PFn/NJKkGYrSpKdL8Rct5MHwiwbZEokKKVXBB7vxKLeaYhRi00lJ+Jyx5ht/kY1zDMZakpMskqBS4bVJpKT8kvFBOKAmNq7qd9WPMaaP56wiUUmEthjDY1aBZWl9bF21H/L6RZxGazKQQrX/toBTZgVLSH+Isk/mDOB0ULjqH5RvKx6KHLgpIqB2Ib5Aj6gPC5YoshLiJtSwHdwWJL6Fw8CcRNDmzhy/MbfeCi58tYJAA6JLvZwpI7ajoW0iv8As4LKcMp77Pp2D/0jDlw0MTKVQANCjt3G/eIlywARoFMRb4Tz8Hbl4a7LwbFrO++/Jj84kUhCCQrQb7p+fb9IRTQVorIlkkLJ4wWUNidH61Cx887yYtDFNBIKmKVG4vzbUi4f77R4rEhYKAG2cbDY+CH7DoIqe+ZSGJ0URtapyPkQT1qMFRLNM2xVDCWBqyuTl9P4SHZjsRtEUvEpIOznbUHnAgYha1EFQANlPpc2V4LfLqY9UFJJCw1/HhUM46LO1f4cyQmSeEg8+fUQ5iOaf4fT1KlNWpJ+hhrxUzEy+JJrT9Y85PxW88mmuzRCCyfapKxiaPGhdy/1KFKpWKTDCiY9xFZsbh9s40DkwTxP7jls2SEpslMpIBdRABfnUr4QW5QFRiJ2KXThle1KBYzdyzOx5352HcErOLx83HT/AG1LplFTFIZLpfU3+n21hizTHjDYcBKQkJukOAAR8PQtcszOL7R75TtfsYGg7hMnkSwoJUVKLlcyYolSyTv/AAu9gw7s8T4rFpkS1UOFKNISBdRsosBpcg+e0Lq83aSg1ErVTcOCVEbP1Ln+2tLxaJYqJ4ggkLUq9SyQkA7k2P8A4+Yap6oGg5hcwIDLS6bJZrEkupulvk0a4zK5UwpIIZVRtsdD9A31hI/zhYSliQCbBuI7A68reYJSMxoKQKjSkuLaEkFzzdxpsYpuLL2S5hk0yUuWq9CCFG9yCQ9+5v8A0gSjHNLQhTimsjYEqa/X8VoKH1Ur3FJUlSkgUm3UEKuxa5+nKN8yyyXMQCzfD+rh+fF9IH6d7iXfyUMpmOGGp0bUUpNj/wCRFo2OBVSprGWmoNooNUQOrfWKf7MqVNSUFkqTYjYl9R2T9okwGYE+4mogomG3NLD6WAbdoW4rpl38EssBLuTSFEONUE3B7Ej6nrE2OlEmohizEsOIMemt36/alh5lNSaKkLUpgb2cVJB1CgSGi2cTpLWrRKaX3DgAKvtZoW0qoIoYoUSSpJDFTEbg61Dq425OI2kY1gQD8QqLFr6G2nXkXHKMxGEKwEgHViPKm+3giIZOUqUkM7bdAQQRfbZukZsnYSPJ2ZlQZKlHfqG3HO9iP5R6hE2coG5Nw7s4szj5faCmX5Ab1XIbyN267xcxctElNQv21EZZBIFmSmSH1X9hs3mKmYKrSSU2UEm1nNQB+dyPltE37UmZVfjBuOf/AI8+3iK5CqTQgjUO3Mp78uUCtdkbKMpCU3Wl0dnby1ouCTMxATLkoKtqmDDudNGi1gMjmrDrUwP4f6Q75DhQkANp+kY/K8tY4/btkjJXsKejclMiWkKLqhwlmBWEVYQSlR5XJ5OSU272aFGNaIcVlEqZcpY8xEAyyaj4F26wVTEqTHV8bypTXGewnnnFVdr9z5o9PyEoqmKuq/1t/fmIJhVi8RSon2kqcjm3TfdvPKGHMsqUlBEsOGtf9IAysGuQkqINRfoL2+0e71SXr2cxTTDGYKly5iFzBSAOFLi+jlXzV8hFLHzl4nEpTZMtNuiUhLO1jfi/t2p5us1SlEXAdtn6iLuR4ImfWQSkPUSS1RcgP4P3iOVy4r5CS1Yam4YSwFFBAYIlvd+EFS7aJ+LvZixjMckIAqJSkcKgn4lO5ASBqGJv2iZMwLUaXUhIJBOiWAAfdywPO/ZrSsOFvMXxEgUjRw1RpGnW/fSGUQA4SYt6qUi4cFqRf4iTuz/IRYGdIWWUVzVsAEIskWDVKG+m3dg8VczJUPbSCLU6Puka+RFVVMse2DSp/wB4q4JL3FtO/kRcXRTDUppoZUtKAzpUZyHNtGEUf8lmSplaQFpU+hAIL21VdmbTaN8pCpk2hFSJQSKrEFe4BUQDDt/k8ssyXekEgnhYAfEe3m5grT2UKOMxaCQyWpKSSNqzr9D8kx5mWGTNlIVLsobHwx7Q14jK5IAS7AO7kcRcDfXf5dopKy1IVQ6UJdmDB92B1NiNIXlx8kwosXZM8pUgpBsA41Y/EPF28GGR0kJbV3PV+fWx+sA8xCkTQQHLEEJSTc3ckWe/yMX8FKnTGVLQzgAjkRyIjn5Z8dMatlHGZn7aykOX26OxitKmLWSWLH+9IZkejJyy5Adyb9dYtS/TM6Xcyz4v9vEcrNnnH8YsakvkU05EkqrIv9h33EH8HggzAf31grKwI31i3IwoEczLmyTDSQPw+XsIKYeSA0WZaQBpFhEiM9t6kKnj9xN5FoISZkVZcuLUqXAy8ZS2LUnHRblqiZMQSkRaSmNGDx0vQXJs4x77auD/ABJ/UX+0QYzEyHpmKQCeo+o28mKyZqQ6VJJSoiyiuzP8MyWR9UKirNy1B/03T0AQvu5BSR3KY9tmlk/0jZi8WGBv/wBptL9kXpmUSlgFJBGrvb/kLfKNZ2XKZMsOElQKiNwGt9IrYDAolqCyeMbqBA/9SAfJMGJc3p/xP6W+xgscZNXJUysuSEJ1jlyXy1RRm49ElPt0pA1CXDsOnID7+IpIzsrLOQzEj4viID20+FvpFLPJKkrK9RyL3HbnCvOxykzVEFnL9gkWF+7dYCWRxdD4vkrHcYUrqKlHUW0BfiYA3fw0WMHgJaFArDsQRVoCDuP7bxC3lGbLWsDQDrfv1vB/HTgRYlyDfVmOwb7n5QP1EMUQrLxYBACkywwSwAqJAJIKj/5baRYxfqVKEqCWWrRwzAsRqS3OFHE4mgBZNwoXGnMNtVr8/EQpWHJLsNHJZ7sWSL8KSO7aRbzNLROITn5utZY2PIl72FNuZ3cd+Y6RjAqZx1ONgagdABYsXLDWPEYUKLFhSQ56anc6X6/qNx0g4aalbAoVYs4vYu/UQh5Gw+NDhOxKFpp+A6GyQ5vYJILbHzvFz0z6pEibRMSSnZmKvk9/pAyXgQqW4tUAejNdja9jEMuUVGkk2uDfUc23DRlySvsOjsOXes8BMsMQhCtKZn7svy42B8GGFBBDggg6EXB8xx9WFlTUD3JaVFtSkP8AMXHzipJyZMovhp83DnX93MUkHuHc+TGqGJyimjK8qTpnaJuHSr4kg9w8VV5TLOgbt/WOc4T1JmUkAGdLxABuZqEgtewoobuVGHL0v6gxGJ/1MGqUlv8AUrBQTyAUAovzTUOsKyYIv8ohxyJ9Mv8A+UAaF+8YMEU7frBSMjFk/TsUutDFNoHolxKmXE06alIdRAHWNJK6rsw2fX5bRiy+C8K5RZfJS7NkJiUCNQI3TEwyT1JAuPwfPKZ3JRHQxJXzSD1TY/LSBq556L7aw5+lMty1VPv4l5p/+ldWHALfCK2KyH1SW6R6zNnjijylf/EcnHilN0gEjEHZXhQf+sYtZZwnyg/cfzEOWaf4dSWKpGKmSbO0xp0sdeIhQHUqhDxMsyphR7sqaBpMlFbdrpZ+xI6wjx/Ox53UUx2TxnjVtoLYXM00ULSiYN6nSvs7KSrk3DAzNskwk1JUhMyUvYM4PPQkfWPPeO7K72PzGvmPUzgNCU9NP6GHS8aLdgR8iSVCrl+H9iaUqG9tbwYXi7sW2sGs5D+dou4/CicNBUNDof5QF/ZVpUQoMde7F/MZcuNwN2DMprfYexOX1YYqIqsSzkHRz8urwj4bMVhkniDMN22DHa3zhm/bT7S0BVyhQ3s9xd97/MQHyDApLLOr/I/9t84XKVIdVsPYSaCkEkVAbuag4pu3jxrtBHFD3cNMSTdKSQoFyU8xa4tcExRSnls/QAPZm6j5nvArNMaUiYnWpIZnFySdB8vEKxyuWw5dDZ6HxSZkkBXFYhTalunNmftFudg6F2U6bbkty78oXfSFUtAUVU3fqX5DU7Q/ZZ6cnYtdZ/cyi3xB1HqEvbyfBhM1zlROVIGpmgDUjvp9YN5b6cxE5iUiWj88wEHxL+I+aR1hxyf05h8OxQipY/GviV42T/4gQXjofV4x4xMSw27kA8q9LyJLEj3V61LuAf4UfCnvc9YORBisWiWkqWoJSNSSAPmYWMd6uKzThZZWfzqBCfA1P0hTd9jkkuhoxGJQgFS1BIGpJYDzC1jfVwUaMMgzD+YuED9Vf3eB8rIJ+IUF4hZVyGiR2ToIaMtyeXKFgIz5c3BaLWwblmBnLUJk5ZJ2GgHYQxoDRtS0egRz5zlOW2MR4I3AjAmPRDceOuymz5szXKpkm81AAJYLQoKSTrpqPIEVRMXSU1FaD+G/2jIyPTezlTjxdI8SoNTxJH5XNP8Ax0iSo8njIyLSroWzPdHURdyzCTJ3w0hO5UX+Sdft3jIyMP6jnnhw8oPZt8DDDLl4zQbwuBkpKZapU6YpWqyyEIAbQgt1a51jXNMFh0i00kgEgEP2ZQv5YjrHsZHM8DNlzZKlJ/3+Tf5uLHix8oxV/wB+AGvLpagQF0uGYjo0VMJlCpXClSVJd+R2P3jIyOvLFE5azzQRw2VzphShABUTsFKP/EDTeDWE/wAJJ8w1TplBOwYn5aCMjIwTVSpGzFNyVsefT3oCRh7niVzMN0qWEhgLRkZBRikG2Q43Hy5Sapi0pHMlvHU9IVcd6wXMNGFlk/xqBA8J1Plu0ZGRbZRDhfT06eoLxC1LPXQdk6DxDRg8mRLAYCPIyEvYMggmW0boTGRkBwT0ykbtGNGRkL4IbZ7HsZGQ2KKP/9k='
    ),
];

$admin = new Admin(
    'Admin',
    'admin',
    'admin@example.com',
    'data:image/jpeg;base64,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',
);
foreach ($User as $Usering) {
    echo ($Usering->avatarka());
    echo '<br>';
    echo ($Usering->full_name());
    echo '<br>';
    echo ($Usering->emails());
    echo '<br>';
}
echo '<br>';
echo ($admin->avatarka());

echo '<br>';
echo ($admin->full_name() . ' ' . $admin->destroyEverything());
echo '<br>';
echo ($admin->emails());