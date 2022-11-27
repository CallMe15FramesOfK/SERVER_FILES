try:
    f = open('nie_istniejacy.txt')
except:
  raise Exception("Nie ma pliku")