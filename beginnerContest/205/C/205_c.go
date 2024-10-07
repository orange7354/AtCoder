package main

import (
	"fmt"
	"math"
)

func main() {
	sub()
	// var a, b, c float64
	// fmt.Scan(&a, &b, &c)

	// var ac, bc float64
	// ac = math.Pow(a, c)
	// bc = math.Pow(b, c)

	// if ac > bc {
	// 	fmt.Println(">")
	// } else if ac < bc {
	// 	fmt.Println("<")
	// } else {
	// 	fmt.Println("=")
	// }

}

func sub() {
	var a, b, c int
	fmt.Scan(&a, &b, &c)
	if a == b {
		fmt.Println("=")
	} else if a < 0 && b < 0 {
		if isEven(c) == false {
			if a > b {
				fmt.Println("<")
			} else {
				fmt.Println(">")
			}
		} else {
			if a < b {
				fmt.Println("<")
			} else {
				fmt.Println(">")
			}
		}
	} else if a < 0 || b < 0 {
		if math.Abs(float64(a)) == math.Abs(float64(b)) {
			fmt.Println("=")
		} else if a < b {
			fmt.Println("<")
		} else {
			fmt.Println(">")
		}
	} else {
		if a < b {
			fmt.Println("<")
		} else {
			fmt.Println(">")
		}
	}

}

func isEven(a int) bool {
	return a%2 == 0
}
