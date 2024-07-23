package main

import (
	"fmt"
	"strings"
)

func Split(input string) bool {
	slice := strings.Split(input, "")
	var result bool = false

	if slice[0] == "R" {
		result = true
	} else if slice[0] == "M" {
		result = false
	} else if slice[1] == "R" {
		result = true
	} else if slice[1] == "M" {
		result = false
	}

	return result
}
func main() {
	var s string

	fmt.Scan(&s)

	if Split(s) {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}

}
