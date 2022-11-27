import json


data = {
  'name': [],
  'made': [],
  'Score': []
}

while(True):

  Nazwa = input("Podaj nazwe filmu: ")

  if Nazwa == "":
    break

  Srednia = input("Podaj ocene filmu: ")

  Rok = input("Podaj rok filmu: ")

  data['name'].append(Nazwa)

  data['made'].append(Rok)

  data['Score'].append(Srednia)


filmy = json.dumps(data)
f = open('filmy(baza).json', mode='a', encoding='utf-8')
f.write(filmy)
f.close()