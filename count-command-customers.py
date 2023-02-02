from pyspark import SparkConf, SparkContext

conf = SparkConf().setMaster("local").setAppName("order")
sc = SparkContext(conf = conf)

def parseLine(line):
    fields = line.split(',')
    IDconsumer = fields[0]
    idproduct = fields[1]
    quantity = float(fields[2])
    return (IDconsumer,quantity)

lines = sc.textFile("C:/Users/THOMSON/OneDrive/Bureau/MD4 Cours/big data/count-command-customers.py")
parsedLines = lines.map(parseLine)

# on a addiche IDconsomeur & sa quantité
grouped = parsedLines.reduceByKey(lambda x, y: (x + y))

# ensemble de resultats
results = grouped.collect()
for result in results:
    print(result[0] + "\t{:.2f}".format(result[1]))