package main

import (
	"bufio"
	"fmt"
	"os"
)

func main() {
	sc := bufio.NewScanner(os.Stdin)
	sc.Split(bufio.ScanWords)
	sc.Scan()
	n := sc.Text()

	for len(n) <= 3 {
		n = "0" + n
	}
	fmt.Println(n)
}
