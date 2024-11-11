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
	a := sc.Text()
	na, _ := strconv.Atoi(a)

	sc.Scan()
	b := sc.Text()
	nb, _ := strconv.Atoi(b)

	fmt.Println(pow(na-nb, 32))
}

func pow(a, b int) int {
	if a == 0 {
		return 1
	}
	tmp := 1
	for i := 0; i < a; i++ {
		tmp *= b
	}

	return tmp
}
