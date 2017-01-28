import pandas as pd
import datetime as date
from data_sql import *
import graphlab

import sys
import os
import inspect


connection_string = 'mysql+pymysql://%s:%s@%s/%s' % (
    'root',  # 'petari',
    '',  # 'TM48903$$RES',
    'localhost',
    'review_evaluator',
)

def main(id):

    db = ReadSQL(connection_string)
    db.load_data("select * from products")
    # engine = db.get_engine()
    data = db.get_data_frame()

    products = graphlab.SFrame(data)
    products['word_count'] = graphlab.text_analytics.count_words(products['review'])
    giraffe_reviews = products[products['name'] == 'Vulli Sophie the Giraffe Teether']
    products = products[products['rating'] != 3]
    products['sentiment'] = products['rating'] >= 4
    train_data, test_data = products.random_split(.8, seed=0)
    sentiment_model = graphlab.logistic_classifier.create(train_data, target='sentiment', features=['word_count'],
                                                          validation_set=test_data, max_iterations=30)
    giraffe_reviews['predicted_sentiment'] = sentiment_model.predict(giraffe_reviews, output_type='probability')
    # giraffe_reviews = giraffe_reviews.sort('predicted_sentiment', ascending=False)

    print giraffe_reviews[giraffe_reviews['id'] == int(id)]['predicted_sentiment'][0]



if __name__ == '__main__':
    main(sys.argv[1])
