Schro = {
    'Krakow' : 13,
    'Warszawa' : 10,
    'Poznan' : 5
}

print(Schro)

Schro['Krakow'] = 14
Schro['Poznan'] = 6
Schro['Warszawa'] = 13

print(Schro)

Schro['Rzeszow'] = 3

print(Schro)


print('Podaj nazwe schroniska(bez polskich znakow) ')
Nazwa = input()

if Nazwa == 'Krakow':
    print(Schro['Krakow'])
elif Nazwa == 'Poznan':
    print(Schro['Poznan'])
elif Nazwa == 'Warszawa':
    print(Schro['Warszawa'])
elif Nazwa == 'Rzeszow':
    print(Schro['Rzeszow'])
