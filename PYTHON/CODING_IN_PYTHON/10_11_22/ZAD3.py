from collections import namedtuple


def addlink(value, node):
    node(value, node)


def printlinkedlist(node):
    while node.next != 0:
        print(node.value)
        node = node.next
    print(node.value)


def pushfront(value, next):
    return node(value, next)


node = namedtuple('value', ['value', 'next'])

n1 = pushfront(1, 0)
n2 = pushfront(2, n1)
n3 = pushfront(3, n2)
n4 = pushfront(4, n3)

printlinkedlist(n4)