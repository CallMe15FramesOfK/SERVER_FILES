# Napisz funkcję która przyjmie dowolnie długą listę liczb (użyj *args) i zwróci wartość najmniejszą (użyj funkcji wbudowanej min).


def minimalna(*args):

    return min(*args)


print(minimalna(4,5,6,7,8,9,10,2,1))