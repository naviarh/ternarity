
class T {

    static T(arg) {
        if (arg === true) return true;
        if (arg === false) return false;
        if (arg === undefined) return undefined;
        if (arg > 0) return true;
        if (arg < 0) return false;
        if (arg === 0) return undefined;
        if (arg === 'TRUE') return true;
        if (arg === 'FALSE') return false;
        if (arg === 'UNDEFINED') return undefined;
        if (arg === 'NULL') return undefined;
        if (arg === 'NONE') return undefined;
        if (arg === 'True') return true;
        if (arg === 'False') return false;
        if (arg === 'Undefined') return undefined;
        if (arg === 'Null') return undefined;
        if (arg === 'None') return undefined;
        if (arg === 'true') return true;
        if (arg === 'false') return false;
        if (arg === 'undefined') return undefined;
        if (arg === 'null') return undefined;
        if (arg === 'none') return undefined;
        if (arg === 'N') return undefined;
        if (arg === 'n') return undefined;
        if (arg === 'T') return true;
        if (arg === 't') return true;
        if (arg === 'F') return false;
        if (arg === 'f') return false;
        if (arg === 'U') return undefined;
        if (arg === 'u') return undefined;
        if (arg === '0') return undefined;
        if (arg === '1') return true;
        if (arg === '-1') return false;
        if (arg === 'A') return true;
        if (arg === 'a') return false;
        if (arg === 'i') return false;
        if (arg === 'h') return false;
        return undefined;
    }
    static T3(arg) {
        return this.T(arg);
    }
    
    static BIN(arg) {
        switch (this.T(arg)) {
            case undefined: return false;
            case true:      return true;
            case false:     return false;
        }
    }
    static T2(arg) {
        return this.BIN(arg);
    }
    
    static BIN1(arg) {
        switch (this.T(arg)) {
            case undefined: return undefined;
            case true:      return true;
            case false:     return undefined;
        }
    }
    
    static BIN2(arg) {
        switch (this.T(arg)) {
            case undefined: return true;
            case true:      return true;
            case false:     return false;
        }
    }
    
    static BIN3(arg) {
        switch (this.T(arg)) {
            case undefined: return true;
            case true:      return true;
            case false:     return undefined;
        }
    }
    
    static BIN4(arg) {
        switch (this.T(arg)) {
            case undefined: return false;
            case true:      return true;
            case false:     return true;
        }
    }
    
    static BIN5(arg) {
        switch (this.T(arg)) {
            case undefined: return undefined;
            case true:      return true;
            case false:     return true;
        }
    }
    
    static NOT(arg) {
        switch (this.T(arg)) {
            case undefined: return undefined;
            case true:      return false;
            case false:     return true;
        }
    }
    
    static NOT1(arg) {
        switch (this.T(arg)) {
            case undefined: return false;
            case true:      return true;
            case false:     return undefined;
        }
    }
    
    static NOT2(arg) {
        switch (this.T(arg)) {
            case undefined: return true;
            case true:      return undefined;
            case false:     return false;
        }
    }
    
    static LEFT(arg) {
        switch (this.T(arg)) {
            case undefined: return false;
            case true:      return undefined;
            case false:     return true;
        }
    }
    
    static RIGHT(arg) {
        switch (this.T(arg)) {
            case undefined: return true;
            case true:      return false;
            case false:     return undefined;
        }
    }
    
    static AND(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return false;
                    case true:      return false;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return undefined;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            default: return undefined;
        }
    }
    static MIN(arg) {
        return this.T(arg);
    }
    
    static OR(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return undefined;
                    case true:      return true;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return true;
                }
            default: return undefined;
        }
    }
    static MAX(arg) {
        return this.T(arg);
    }
    
    static NAND(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return true;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return undefined;
                    case true:      return undefined;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return undefined;
                    case true:      return false;
                }
            default: return undefined;
        }
    }
    
    static NOR(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return undefined;
                    case true:      return false;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return undefined;
                    case true:      return false;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return false;
                    case true:      return false;
                }
            default: return undefined;
        }
    }
    
    static XAND(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return undefined;
                    case true:      return false;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return undefined;
                    case true:      return undefined;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            default: return undefined;
        }
    }
    static EQV(arg) {
        return this.T(arg);
    }
    
    static XOR(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return undefined;
                    case true:      return undefined;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return undefined;
                    case true:      return false;
                }
            default: return undefined;
        }
    }
    
    static XMIN(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return false;
                    case true:      return false;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return true;
                    case true:      return undefined;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            default: return undefined;
        }
    }
    
    static XMAX(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return false;
                    case true:      return true;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return false;
                }
            default: return undefined;
        }
    }
    
    static WEBB(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return true;
                    case true:      return false;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return false;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return false;
                    case true:      return false;
                }
            default: return undefined;
        }
    }
    
    static IMP(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return true;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return undefined;
                    case true:      return true;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            default: return undefined;
        }
    }
    
    static IMP1(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return true;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return true;
                    case true:      return true;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            default: return undefined;
        }
    }
    
    static IMP2(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return true;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return true;
                    case true:      return true;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return true;
                }
            default: return undefined;
        }
    }
    
    static MEAN(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return false;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return true;
                    case true:      return undefined;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return false;
                    case undefined: return undefined;
                    case true:      return false;
                }
            default: return undefined;
        }
    }
    
    static MAGN(arg1, arg2) {
        switch (this.T(arg1)) {
            case false:
                switch (this.T(arg2)) {
                    case false:     return undefined;
                    case undefined: return false;
                    case true:      return false;
                }
            case undefined:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return undefined;
                    case true:      return false;
                }
            case true:
                switch (this.T(arg2)) {
                    case false:     return true;
                    case undefined: return true;
                    case true:      return undefined;
                }
            default: return undefined;
        }
    }
    
}


// function ternarity(arg) {
//     switch (T.T(arg)) {
//         case undefined: 
//             console.log('Undefined');
//             break;
//         case true:
//             console.log('True');
//             break;
//         case false:
//             console.log('False');
//             break;
//     }
// }
// 
// ternarity( T.T('-1') )      // False
// ternarity( T.T('T') )       // True
// ternarity( T.T(+123.45) )   // True
// ternarity( T.T('Text') )    // Undefined
// ternarity( T.XAND( T.NOT(true), T.BIN(undefined) ) ) // True


