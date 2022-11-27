queue = []

queue.append('a')
queue.append('b')
queue.append('c')
queue.append('d')
queue.append('e')
queue.append('f')
queue.append('g')
queue.append('h')


print('Kolejka')
print(queue)



print('Usuwanie elementow z kolejki')
for i in range(len(queue)):
    print(queue.pop(0))


print("\nKolejka po usunieciu elementow")
print(queue)

