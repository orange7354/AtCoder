package main

import (
	"fmt"
	"math"
)

func main() {
	sub()
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
