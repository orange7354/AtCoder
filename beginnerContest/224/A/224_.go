package main

import (
	"fmt"
	"regexp"
)

func main() {
	var s string
	fmt.Scan(&s)

	pattern := `er$`
	re, _ := regexp.Compile(pattern)
	match := re.FindAllString(s, -1)

	if len(match) > 0 {
		fmt.Println("er")
	} else {
		fmt.Println("ist")
	}

}
