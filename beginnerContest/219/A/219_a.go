package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	sc := bufio.NewScanner(os.Stdin)
	sc.Split(bufio.ScanWords)
	sc.Scan()
	x, _ := strconv.Atoi(sc.Text())

	if 0 <= x && x < 40 {
		fmt.Println(40 - x)
	} else if 40 <= x && x < 70 {
		fmt.Println(70 - x)
	} else if 70 <= x && x < 90 {
		fmt.Println(90 - x)
	} else {
		fmt.Println("expert")
	}

}
