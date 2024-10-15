package main

import (
	"fmt"
	"strings"
)

func main() {
	var n int
	var s string
	fmt.Scan(&n)
	fmt.Scan(&s)
	slice := strings.Split(s, "")

	var res int
	for i, v := range slice {
		if v == "1" {
			res = i
			break
		}
	}

	if res%2 == 0 {
		fmt.Println("Takahashi")
	} else {
		fmt.Println("Aoki")
	}

}
