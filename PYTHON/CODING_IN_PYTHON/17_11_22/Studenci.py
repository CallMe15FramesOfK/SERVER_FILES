import csv


f = open('Studenci.csv', mode='w', encoding='utf-8')
writer = csv.writer(f, delimiter=';')

x = input("Ile studentow chcesz dodac: ")
number = int(x)

for i in range(number):
    album = input("Numer albumu studenta: ")
    ocena = input("Ocena koncowa: ")
    writer.writerow([album, ocena])
    i += 1

f.close()