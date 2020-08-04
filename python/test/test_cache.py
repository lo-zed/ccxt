import os
import sys

root = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
sys.path.append(root)

# ----------------------------------------------------------------------------

# PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
# https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

# ----------------------------------------------------------------------------

from ccxtpro.base.cache import ArrayCache, ArrayCacheBySymbolById  # noqa: F402


def equals(a, b):
    return a == b


# ----------------------------------------------------------------------------

cache = ArrayCache(3)

cache.append(1)
cache.append(2)
cache.append(3)
cache.append(4)

assert equals(cache, [2, 3, 4])

cache.append(5)
cache.append(6)
cache.append(7)
cache.append(8)

assert equals(cache, [6, 7, 8])

cache.clear()

assert equals(cache, [])

cache.append(1)

assert equals(cache, [1])

# ----------------------------------------------------------------------------

cache = ArrayCache(1)

cache.append(1)
cache.append(2)

assert equals(cache, [2])

# ----------------------------------------------------------------------------

cache = ArrayCacheBySymbolById()

object1 = {'symbol': 'BTC/USDT', 'id': 'abcdef', 'i': 1}
object2 = {'symbol': 'ETH/USDT', 'id': 'qwerty', 'i': 2}
object3 = {'symbol': 'BTC/USDT', 'id': 'abcdef', 'i': 3}

cache.append(object1)
cache.append(object2)
cache.append(object3)  # should update index 0

assert equals(cache, [object3, object2])

maxLength = 5

cache = ArrayCacheBySymbolById(maxLength)

for i in range(1, 11):
    cache.append({
        'symbol': 'BTC/USDT',
        'id': str(i),
        'i': i,
    })

assert(equals(cache, [
    {'symbol': 'BTC/USDT', 'id': '6', 'i': 6},
    {'symbol': 'BTC/USDT', 'id': '7', 'i': 7},
    {'symbol': 'BTC/USDT', 'id': '8', 'i': 8},
    {'symbol': 'BTC/USDT', 'id': '9', 'i': 9},
    {'symbol': 'BTC/USDT', 'id': '10', 'i': 10},
]))

for i in range(1, 11):
    cache.append({
        'symbol': 'BTC/USDT',
        'id': str(i),
        'i': i + 10,
    })

assert(equals(cache, [
    {'symbol': 'BTC/USDT', 'id': '6', 'i': 16},
    {'symbol': 'BTC/USDT', 'id': '7', 'i': 17},
    {'symbol': 'BTC/USDT', 'id': '8', 'i': 18},
    {'symbol': 'BTC/USDT', 'id': '9', 'i': 19},
    {'symbol': 'BTC/USDT', 'id': '10', 'i': 20},
]))
