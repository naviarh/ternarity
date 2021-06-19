#!/usr/bin/env python3

class T:
    
    def __new__(self, arg=None):
        return self.T(arg)
    
    @staticmethod
    def T(arg):
        if arg is True: return True
        if arg is False: return False
        if arg is None: return None
        if arg == 0: return None
        if arg == 1: return True
        if arg == -1: return False
        if arg == 'TRUE': return True
        if arg == 'FALSE': return False
        if arg == 'NONE': return None
        if arg == 'NULL': return None
        if arg == 'UNDEFINED': return None
        if arg == 'True': return True
        if arg == 'False': return False
        if arg == 'None': return None
        if arg == 'Null': return None
        if arg == 'Undefined': return None
        if arg == 'true': return True
        if arg == 'false': return False
        if arg == 'none': return None
        if arg == 'null': return None
        if arg == 'undefined': return None
        if arg == 'N': return None
        if arg == 'n': return None
        if arg == 'T': return True
        if arg == 't': return True
        if arg == 'F': return False
        if arg == 'f': return False
        if arg == '0': return None
        if arg == '1': return True
        if arg == '-1': return False
        if isinstance(arg, (int, float)) and arg > 0: return True
        if isinstance(arg, (int, float)) and arg < 0: return False
        if arg == 'U': return None
        if arg == 'u': return None
        if arg == 'A': return True
        if arg == 'a': return True
        if arg == 'i': return False
        if arg == 'h': return False
        return None
    @staticmethod
    def T3(arg):
        return T.T(arg)
    
    @staticmethod
    def BIN(arg):
        return {
            None: False,
            True: True,
            False: False,
        }.get(T.T(arg))
    @staticmethod
    def T2(arg):
        return T.BIN(arg)
    
    @staticmethod
    def BIN1(arg):
        return {
            None: None,
            True: True,
            False: None,
        }.get(T.T(arg))
    
    @staticmethod
    def BIN2(arg):
        return {
            None: True,
            True: True,
            False: False,
        }.get(T.T(arg))
    
    @staticmethod
    def BIN3(arg):
        return {
            None: True,
            True: True,
            False: None,
        }.get(T.T(arg))
    
    @staticmethod
    def BIN4(arg):
        return {
            None: False,
            True: True,
            False: True,
        }.get(T.T(arg))
    
    @staticmethod
    def BIN5(arg):
        return {
            None: None,
            True: True,
            False: True,
        }.get(T.T(arg))
    
    @staticmethod
    def NOT(arg):
        return {
            None: None,
            True: False,
            False: True,
        }.get(T.T(arg))
    
    @staticmethod
    def NOT1(arg):
        return {
            None: False,
            True: True,
            False: None,
        }.get(T.T(arg))
    
    @staticmethod
    def NOT2(arg):
        return {
            None: True,
            True: None,
            False: False,
        }.get(T.T(arg))
    
    @staticmethod
    def LEFT(arg):
        return {
            None: False,
            True: None,
            False: True,
        }.get(T.T(arg))
    
    @staticmethod
    def RIGHT(arg):
        return {
            None: True,
            True: False,
            False: None,
        }.get(T.T(arg))
    
    @staticmethod
    def AND(arg1, arg2):
        return {
            (False, False): False,
            (False, None): False,
            (False, True): False,
            (None, False): False,
            (None, None): None,
            (None, True): None,
            (True, False): False,
            (True, None): None,
            (True, True): True,
        }.get((T.T(arg1), T.T(arg2)))
    @staticmethod
    def MIN(arg1, arg2):
        return T.AND(arg1, arg2)
    
    @staticmethod
    def OR(arg1, arg2):
        return {
            (False, False): False,
            (False, None): None,
            (False, True): True,
            (None, False): None,
            (None, None): None,
            (None, True): True,
            (True, False): True,
            (True, None): True,
            (True, True): True,
        }.get((T.T(arg1), T.T(arg2)))
    @staticmethod
    def MAX(arg1, arg2):
        return T.OR(arg1, arg2)
    
    @staticmethod
    def NAND(arg1, arg2):
        return {
            (False, False): True,
            (False, None): True,
            (False, True): True,
            (None, False): True,
            (None, None): None,
            (None, True): None,
            (True, False): True,
            (True, None): None,
            (True, True): False,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def NOR(arg1, arg2):
        return {
            (False, False): True,
            (False, None): None,
            (False, True): False,
            (None, False): None,
            (None, None): None,
            (None, True): False,
            (True, False): False,
            (True, None): False,
            (True, True): False,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def XAND(arg1, arg2):
        return {
            (False, False): True,
            (False, None): None,
            (False, True): False,
            (None, False): None,
            (None, None): None,
            (None, True): None,
            (True, False): False,
            (True, None): None,
            (True, True): True,
        }.get((T.T(arg1), T.T(arg2)))
    @staticmethod
    def EQV(arg1, arg2):
        return T.XAND(arg1, arg2)
    
    @staticmethod
    def XOR(arg1, arg2):
        return {
            (False, False): False,
            (False, None): None,
            (False, True): True,
            (None, False): None,
            (None, None): None,
            (None, True): None,
            (True, False): True,
            (True, None): None,
            (True, True): False,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def XMIN(arg1, arg2):
        return {
            (False, False): True,
            (False, None): False,
            (False, True): False,
            (None, False): False,
            (None, None): True,
            (None, True): None,
            (True, False): False,
            (True, None): None,
            (True, True): True,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def XMAX(arg1, arg2):
        return {
            (False, False): False,
            (False, None): None,
            (False, True): True,
            (None, False): None,
            (None, None): False,
            (None, True): True,
            (True, False): True,
            (True, None): True,
            (True, True): False,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def WEBB(arg1, arg2):
        return {
            (False, False): None,
            (False, None): True,
            (False, True): False,
            (None, False): True,
            (None, None): True,
            (None, True): False,
            (True, False): False,
            (True, None): False,
            (True, True): False,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def IMP(arg1, arg2):
        return {
            (False, False): True,
            (False, None): True,
            (False, True): True,
            (None, False): None,
            (None, None): None,
            (None, True): True,
            (True, False): False,
            (True, None): None,
            (True, True): True,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def IMP1(arg1, arg2):
        return {
            (False, False): True,
            (False, None): True,
            (False, True): True,
            (None, False): None,
            (None, None): True,
            (None, True): True,
            (True, False): False,
            (True, None): None,
            (True, True): True,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def IMP2(arg1, arg2):
        return {
            (False, False): True,
            (False, None): True,
            (False, True): True,
            (None, False): False,
            (None, None): True,
            (None, True): True,
            (True, False): False,
            (True, None): None,
            (True, True): True,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def MEAN(arg1, arg2):
        return {
            (False, False): False,
            (False, None): None,
            (False, True): False,
            (None, False): None,
            (None, None): True,
            (None, True): None,
            (True, False): False,
            (True, None): None,
            (True, True): False,
        }.get((T.T(arg1), T.T(arg2)))
    
    @staticmethod
    def MAGN(arg1, arg2):
        return {
            (False, False): None,
            (False, None): False,
            (False, True): False,
            (None, False): True,
            (None, None): None,
            (None, True): False,
            (True, False): True,
            (True, None): True,
            (True, True): None,
        }.get((T.T(arg1), T.T(arg2)))


#def ternarity(arg):
    #if arg is None:
        #print('None')
    #elif arg:
        #print('True')
    #else:
        #print('False')

#ternarity( T.T('-1') )      # False
#ternarity( T.T('T') )       # True
#ternarity( T.T(+123.45) )   # True
#ternarity( T.T('Text') )    # None
#ternarity( T.XAND( T.NOT(True), T.BIN(None) ) ) # True

#print(T(True))



